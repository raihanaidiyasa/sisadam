<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataLulusController extends Controller
{
    public function index()
    {
        return view('data_lulus');
    }
}