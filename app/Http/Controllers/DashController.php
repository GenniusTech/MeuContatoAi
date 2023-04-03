<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function dashboard (){
        return view('dashboard.index');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');//
    }
}
