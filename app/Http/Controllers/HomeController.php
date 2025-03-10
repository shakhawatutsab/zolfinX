<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.index');

    }
    public function home2() {
        return view('home-2');
    }
    public function home3() {
        return view('home-3');
    }
    public function home4() {
        return view('home-4');
    }
    public function home5() {
        return view('home-5');
    }

}
