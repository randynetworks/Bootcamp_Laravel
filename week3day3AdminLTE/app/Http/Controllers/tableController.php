<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    public function index()
    {
        $data['title'] = "Home";
        return view('home', $data);
    }

    public function data_table()
    {
        $data['title'] = "Data Table";
        return view('datatable', $data);
    }
}
