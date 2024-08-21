<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogGridController extends Controller
{
    public function bloggrid()
    {
        return view('front.bloggrid');
    }
}

