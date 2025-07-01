<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\AkunEksekutif;
use Illuminate\Support\Facades\Redirect;

class LoginEksekutifController extends Controller
{
    public function showLoginForm()
    {
        return view('login_eksekutif');
    }

    public function login_proses(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.eksekutif');
        }

        return back()->withErrors([
            'username' => 'Username atau Kata Sandi yang Anda masukkan salah.',
        ])->onlyInput('username');
    }

    public function logout (Request $request): RedirectResponse {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}