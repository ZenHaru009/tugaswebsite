<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('index');
    }
    function operator()
    {
        return view('index');
    }
    function keuangan()
    {
        return view('index');
    }
    function marketing()
    {
        return view('index');
    }
}
