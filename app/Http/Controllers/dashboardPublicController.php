<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPublicController extends Controller
{
    public function dashboardPublic() {
        return view('dashboard_public');
    }
}
