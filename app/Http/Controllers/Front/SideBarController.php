<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SideBarController extends Controller
{
    public function sidebar()
    {
        return view('front.sidebar'); 
    }
}

