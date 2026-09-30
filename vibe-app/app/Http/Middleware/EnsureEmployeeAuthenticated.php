<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureEmployeeAuthenticated
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('authenticated_employee.email')) {
            return redirect()->route('login')->withErrors(['employee' => 'Please sign in to access your private attendance details.']);
        }

        return $next($request);
    }
}
