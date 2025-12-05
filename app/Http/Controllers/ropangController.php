<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ropangController extends Controller
{
    public function ropang ()
    {
        return view ('ropanghome');
    }
}
