<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homes()
    {
        return view('pages.homes');
    }

    public function cars()
    {
        return view('pages.cars');
    }
}
