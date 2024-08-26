<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
     $cred = $request->only('email','password');  
        if(Auth::attempt($cred)){
            return redirect()->route('admin.dashboard');
        } else{
            return redirect()->back()->withErrors(['email' => 'Email və ya şifrə səhvdir.']);
        }
    }
}
