<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // Login Index
    public function index()
    {
        return view('login.index');
    }

    // Login
    public function authenticate(Request $request)
    {
        $logins = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($logins)) {
            $request->session()->regenerate();

            // Return to the dashboard
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed, Please check your username and password');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You\'ve successfully ended your session.');
    }
}
