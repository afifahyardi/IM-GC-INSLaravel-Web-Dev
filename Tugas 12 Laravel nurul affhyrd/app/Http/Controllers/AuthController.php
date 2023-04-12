<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function register()
    {
        return view('register');
    }

public function welcome(Request $request)
    {
       $First_name = $request['fn'];
       $Last_name = $request['ln'];

       return view('welcome', compact('First_name','Last_name'));
    }
}
