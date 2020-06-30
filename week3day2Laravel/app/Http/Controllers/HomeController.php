<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['title' => "SanberBook"];
        return view('home', $data);
    }
}
