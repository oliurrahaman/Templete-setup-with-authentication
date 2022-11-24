<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function dashboard(Request $request)
    {


        return view('backend.pages.dashboard');
    }
}
