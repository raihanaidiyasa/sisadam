<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginEksekutifController extends Controller
{
    public function showLoginForm()
    {
        return view('login_eksekutif');
    }
}