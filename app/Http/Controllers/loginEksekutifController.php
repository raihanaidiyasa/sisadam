<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginEksekutifController extends Controller
{
    public function showLoginForm()
    {
        return view('login_eksekutif');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nomor_identitas' => 'required|string',
            'password' => 'required|string',
        ]);

        // Here you would typically check credentials against database
        // For now, let's just redirect to dashboard
        
        // You can add your authentication logic here
        // For example:
        // if (Auth::attempt(['nomor_identitas' => $request->nomor_identitas, 'password' => $request->password])) {
        //     return redirect()->route('dashboard.executive');
        // }
        
        // For testing purposes, redirect directly to dashboard
        return redirect()->route('dashboard.eksekutif');
        
        // If login fails, redirect back with error
        // return back()->with('error', 'Invalid credentials');
    }
}