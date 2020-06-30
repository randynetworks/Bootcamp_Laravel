<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // register
    public function register()
    {
        $data = ['title' => "Form Daftar Account"];
        return view('register', $data);
    }

    // welcome
    public function welcome()
    {
        $data = ['title' => "Selamat Datang!"];
        return view('welcome', $data);
    }
}
