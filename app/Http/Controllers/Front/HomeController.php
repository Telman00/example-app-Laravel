<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mega(){
        return view('front.mega');
    }
    
    public function index(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function services()
    {
        return view('front.services');
    }
    
}
