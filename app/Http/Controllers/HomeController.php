<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test(Request $request)
    {
        dd($request);
    }

    public function getHome()
    {
        $cities = City::get();

        return view('home', compact('cities'));
    }

    public function postLogin(Request $request)
    {
    }

    public function postRegister(Request $request)
    {
        $name = $request->get('name');
        $skills = $request->get('skills', 'none');
        $username = $request->get('username');
        $email = $request->get('email');
        $cityId = $request->get('city_id');
        $password = $request->get('pass');

        User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'skills' => $skills,
            'city_id' => $cityId,
            'password' => bcrypt($password)
        ]);

    }
}
