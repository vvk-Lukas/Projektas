<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'client') {
                return redirect()->route('client.index');
            } elseif (Auth::user()->role === 'employee') {
                return redirect()->route('employee.index');
            } elseif (Auth::user()->role === 'admin') {
                return redirect()->route('admin.index');
            }
        }

        return redirect()->route('login')->withErrors(['message' => 'Prisijungimas nepavyko']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'You have logged out successfull');
    }
}
