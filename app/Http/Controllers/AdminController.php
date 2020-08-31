<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $activetab="Dashboard";
        return view('Admin.Dashboard')
        ->with('activetab',$activetab);
    }
}
