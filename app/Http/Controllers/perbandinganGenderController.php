<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perbandinganGenderController extends Controller
{
    public function index()
    {
        return view('perbandingan_gender_mahasiswa');
    }
}