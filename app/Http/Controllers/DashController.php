<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function dashboard (){
        return view('dashboard.index');
    }
    public function app (){
        return view('dashboard.myapp');
    }
    public function create (){
        return view('dashboard.create');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');//
    }
}
