<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function apply() 
    {
        return view('apply');
    }
    public function login() 
    {
        return view('login');
    }
}
