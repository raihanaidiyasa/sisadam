<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class populasiPerfakultasController extends Controller
{
    public function index()
    {
        return view('populasi_perfakultas');
    }
}