<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataProdiFakultasController extends Controller
{
    public function index()
    {
        return view('data_prodi_fakultas');
    }
}