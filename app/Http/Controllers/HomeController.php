<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name='omar hobe';
        $user='omar303';
        return view('index', compact('name', 'user'));
    }
}



