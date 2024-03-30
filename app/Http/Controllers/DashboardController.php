<?php

namespace App\Http\Controllers;

use App\Models\airport;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $airports=airport::all();
        return view('dashboard',compact("airports"));
    }
}
