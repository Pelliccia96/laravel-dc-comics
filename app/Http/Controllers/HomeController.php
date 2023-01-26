<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $title = 'Laravel Dc Comics';

        return view("home", compact('title'));
    }
}
