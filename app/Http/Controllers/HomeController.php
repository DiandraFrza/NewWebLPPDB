<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Smk Citra Negara";  // Isi dengan title yang sesuai
        return view('index', compact('title'));  // Mengirim title ke view
    }
}
