<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardBiodataController extends Controller
{
    public function dashboardBiodata() {
        return view('dashboard_biodata_mahasiswa');
    }
}
