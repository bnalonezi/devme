<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test(Request $request)
    {
        dd($request);
    }

    public function getHome()
    {
        return view('home');
    }
}
