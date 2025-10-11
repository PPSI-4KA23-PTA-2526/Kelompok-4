<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeKoprollController extends Controller
{
    public function koprol()
    {
        return view('koprollhome');
    }
}
