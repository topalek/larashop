<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(): string
    {
        return view('home.index');
    }
}
