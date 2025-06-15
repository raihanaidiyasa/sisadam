<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPencarianController extends Controller
{
    public function dashboardPencarian() {
        return view('dashboard_pencarian');
    }
}
