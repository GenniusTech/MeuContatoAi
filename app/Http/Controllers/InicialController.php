<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicialController extends Controller
{
    public function index ()
    {

        if(Auth::user()){
            return view('dashboard.index');
        }
        return view('home');
    }

    public function planos ()
    {
        return view('planos');
    }
}
