<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function tes()
    {
        return view('tes');
    }

    public function koprol()
    {
        return view('koprollhome');
    }

    public function mieayam()
    {
        return view('mieayamhome');
    }
}
