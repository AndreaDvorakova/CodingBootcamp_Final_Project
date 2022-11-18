<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // return view('auth.login');
        if(!session()->has('url.intended'))
    {
        session(['url.intended' => url()->previous()]);
    }
    // return view('auth.login'); 
    
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/home');
    }
}
