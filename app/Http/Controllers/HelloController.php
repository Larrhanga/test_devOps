<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //methode hello()
    public function hello(){
        return view('home');
    }
}
