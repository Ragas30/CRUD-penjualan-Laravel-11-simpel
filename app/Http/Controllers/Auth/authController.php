<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'password' => 'required|string|min:8|max:255',
        ]);

        $user = User::create($validated);
        return redirect()->route('login')->with('success', 'Registrasi Berhasil');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(credentials: $credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Login Berhasil');
        }

        return back()->withErrors([
            'email' => 'email tidak cocok dengan data yang terdaftar',
        ]);
    }
}
