<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request['remember'] == 'on' ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return match (Auth::user()->role) {
                'admin' => redirect(RouteServiceProvider::ADMIN_HOME),
                'doctor' => redirect(RouteServiceProvider::DOCTOR_HOME),
            };
            // return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
