<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showLogin(Request $request)
    {
        if ($request->session()->has('authenticated_employee.email')) {
            $this->logout($request);
        }

        return view('employee-login');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
        ]);

        return response('Generated successfully');
    }

    public function registerEmployee(Request $request)
    {
        $data = $request->validate([
            'face_id_enrolled' => ['required', 'accepted'],
            'full_name' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'worksite' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);

        $employee = [
            'face_id_enrolled' => true,
            'full_name' => $data['full_name'],
            'job_title' => $data['job_title'],
            'email' => strtolower($data['email']),
            'worksite' => $data['worksite'],
            'password' => Hash::make($data['password']),
        ];

        $employees = $request->session()->get('registered_employees', []);
        if (isset($employees[$employee['email']])) {
            return back()->withInput()->withErrors(['email' => 'An employee with this email is already registered.']);
        }

        $employees[$employee['email']] = $employee;
        $request->session()->put('registered_employees', $employees);

        return redirect()->route('admin.employees', ['registered' => 1])->with('success', 'Employee registered successfully. They can now sign in with the registered email and password.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'employee' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $employees = $request->session()->get('registered_employees', []);
        $employee = $employees[strtolower($credentials['employee'])] ?? null;

        if (!$employee || strtolower($credentials['employee']) !== $employee['email'] || !Hash::check($credentials['password'], $employee['password'])) {
            return back()->withInput($request->only('employee'))->withErrors(['employee' => 'The email or password does not match a registered employee.']);
        }

        $request->session()->regenerate();
        $request->session()->put('authenticated_employee', [
            'full_name' => $employee['full_name'],
            'email' => $employee['email'],
            'job_title' => $employee['job_title'],
            'worksite' => $employee['worksite'],
        ]);
        $request->session()->put('attendance_records', $request->session()->get('attendance_records.' . $employee['email'], []));

        return redirect()->route('attendance');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['authenticated_employee', 'time_in', 'time_out']);
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function recordPayment(Request $request)
    {
        $data = $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'plan' => ['required', 'in:Starter,Business Pro,Enterprise'],
            'amount' => ['required', 'numeric', 'min:0'],
            'payment_method' => ['required', 'string', 'max:80'],
            'reference' => ['required', 'string', 'max:120'],
        ]);

        $payments = $request->session()->get('billing_records', []);
        $data['status'] = 'paid';
        $data['account_status'] = 'pending_activation';
        $data['recorded_at'] = now('Asia/Singapore')->toDateTimeString();
        array_unshift($payments, $data);
        $request->session()->put('billing_records', array_slice($payments, 0, 50));

        return back()->with('success', 'Payment recorded. Review the payment and activate the customer account.');
    }

    public function activateBusiness(Request $request, int $payment)
    {
        $payments = $request->session()->get('billing_records', []);
        if (!isset($payments[$payment])) {
            return back()->withErrors(['payment' => 'Payment record not found.']);
        }

        $payments[$payment]['account_status'] = 'active';
        $payments[$payment]['activated_at'] = now('Asia/Singapore')->toDateTimeString();
        $request->session()->put('billing_records', $payments);

        return back()->with('success', 'Customer account activated successfully.');
    }

    public function timeIn(Request $request)
    {
        $request->session()->forget('time_out');
        $request->session()->put('time_in', [
            'timestamp' => now('Asia/Singapore')->toIso8601String(),
            'display' => now('Asia/Singapore')->format('h:i:s A'),
        ]);

        return redirect()->route('verify');
    }

    public function timeOut(Request $request)
    {
        $request->session()->put('time_out', [
            'timestamp' => now('Asia/Singapore')->toIso8601String(),
            'display' => now('Asia/Singapore')->format('h:i:s A'),
            'confirmed' => false,
        ]);

        return redirect()->route('timeout.verify');
    }

    public function confirmTimeOut(Request $request)
    {
        $timeIn = $request->session()->get('time_in');
        $timeOut = $request->session()->get('time_out');

        if (!$timeIn || !$timeOut) {
            return redirect()->route('home')->withErrors(['time_out' => 'There is no active shift to clock out.']);
        }

        $employee = $request->session()->get('authenticated_employee', []);
        $record = [
            'date' => now('Asia/Singapore')->format('D, M d'),
            'full_date' => now('Asia/Singapore')->format('l, F d, Y'),
            'time_in' => $timeIn['display'],
            'time_out' => $timeOut['display'],
            'employee' => $employee['full_name'] ?? 'Employee',
            'status' => 'completed',
        ];

        $recordKey = 'attendance_records.' . $employee['email'];
        $records = $request->session()->get($recordKey, []);
        array_unshift($records, $record);
        $request->session()->put($recordKey, array_slice($records, 0, 30));
        $request->session()->put('attendance_records', array_slice($records, 0, 30));
        $request->session()->put('time_out.confirmed', true);

        return redirect()->route('history')->with('success', 'Time out recorded successfully.');
    }
}
