<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get()
    {
        $coffees = Coffee::all();
        return view('index', compact('coffees'));
    }
}
