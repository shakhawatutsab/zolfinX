<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio() {
        return view('portfolio');
    }
    public function portfolio_details() {
        return view('portfolio-details');
    }
}
