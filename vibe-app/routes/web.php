<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.submit');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::middleware('employee.auth')->group(function () {
    Route::get('/attendance', [HomeController::class, 'index'])->name('attendance');
    Route::post('/time-in', [HomeController::class, 'timeIn'])->name('time-in');
    Route::post('/time-out', [HomeController::class, 'timeOut'])->name('time-out');
    Route::post('/time-out/confirm', [HomeController::class, 'confirmTimeOut'])->name('time-out.confirm');
    Route::view('/verify', 'time-in-verification')->name('verify');
    Route::view('/timeout-verify', 'timeout-verification')->name('timeout.verify');
    Route::view('/history', 'attendance-history')->name('history');
    Route::view('/profile', 'employee-profile')->name('profile');
});
Route::view('/admin', 'admin-dashboard-empty')->name('admin');
Route::view('/super-admin', 'super-admin-dashboard')->name('super.admin');
Route::view('/super-admin/login', 'super-admin-login')->name('super.admin.login');
Route::get('/super-admin/businesses', fn () => view('super-admin-empty', ['title' => 'Businesses', 'icon' => 'domain']))->name('super.admin.businesses');
Route::view('/super-admin/plans-pricing', 'super-admin-pricing-clean')->name('super.admin.plans');
Route::view('/super-admin/subscriptions-billing', 'super-admin-billing-clean')->name('super.admin.billing');
Route::post('/super-admin/subscriptions-billing/payments', [HomeController::class, 'recordPayment'])->name('super.admin.billing.record');
Route::post('/super-admin/subscriptions-billing/payments/{payment}/activate', [HomeController::class, 'activateBusiness'])->name('super.admin.billing.activate');
Route::get('/super-admin/platform-analytics', fn () => view('super-admin-empty', ['title' => 'Platform Analytics', 'icon' => 'analytics']))->name('super.admin.analytics');
Route::get('/super-admin/customer-activity', fn () => view('super-admin-empty', ['title' => 'Customer Activity', 'icon' => 'history']))->name('super.admin.activity');
Route::get('/super-admin/support-tickets', fn () => view('super-admin-empty', ['title' => 'Support Tickets', 'icon' => 'confirmation_number']))->name('super.admin.tickets');
Route::get('/super-admin/platform-health', fn () => view('super-admin-empty', ['title' => 'Platform Health', 'icon' => 'dns']))->name('super.admin.health');
Route::get('/super-admin/system-settings', fn () => view('super-admin-empty', ['title' => 'System Settings', 'icon' => 'tune']))->name('super.admin.settings');
Route::get('/super-admin/profile', fn () => view('super-admin-empty', ['title' => 'Super Admin Profile', 'icon' => 'badge']))->name('super.admin.profile');
Route::view('/admin/login', 'admin-login-landing')->name('admin.login');
Route::view('/business/register', 'business-register')->name('business.register');
Route::view('/admin/geofence-sites', 'admin-geofence')->name('admin.geofence');
Route::view('/admin/settings-audit', 'admin-settings')->name('admin.settings');
Route::view('/admin/attendance-reports', 'admin-attendance-reports')->name('admin.reports');
Route::view('/admin/live-attendance', 'admin-live-attendance')->name('admin.live');
Route::view('/admin/shifts-schedules', 'admin-shifts-schedules')->name('admin.shifts');
Route::view('/admin/employees', 'employee-directory')->name('admin.employees');
Route::view('/admin/employees/create', 'employee-create')->name('admin.employees.create');
Route::post('/admin/employees', [HomeController::class, 'registerEmployee'])->name('admin.employees.store');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
