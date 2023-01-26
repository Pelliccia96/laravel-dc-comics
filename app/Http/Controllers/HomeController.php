<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $hello = 'Hello World!';

        return view("home", compact('hello'));
    }
}
