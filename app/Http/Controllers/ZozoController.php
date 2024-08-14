<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZozoController extends Controller
{
    public function logout(){

        Auth::logout();
        return redirect('/');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function registration(){
        if(Auth::check())
        return redirect()->route('dashboard');

        return view('registration');
    }

    public function login(){
        if(Auth::check())
        return redirect()->route('dashboard');

        return view('login');
    }

    public function vue(){
        if(Auth::check())
        return redirect()->route('dashboard');

        return view('login');
    }
}


