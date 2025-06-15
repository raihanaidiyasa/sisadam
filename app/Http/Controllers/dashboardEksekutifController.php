<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardEksekutifController extends Controller
{
    public function eksekutif()
    {
        return view('dashboard_eksekutif');
    }
}