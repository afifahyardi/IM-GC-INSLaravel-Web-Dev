<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register(){
        return view('lamanku.register');
    }
      function welkom(Request $request){
        $nama1 = $request['nama1'];
        $nama2 = $request['nama2'];
        return view('lamanku.welkom', compact('nama1', 'nama2'));
    }
    }

