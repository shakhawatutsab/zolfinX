<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function price(){
        return view('price');
    }
    public function service_details(){
        return view('service-details');
    }
    public function team(){
        return view('team');
    }
}
