<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticGuiderController extends Controller
{
    public function index()
    {
        return view('Guider.indexGuider');
    }
}
