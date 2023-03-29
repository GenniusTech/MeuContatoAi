<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function config (){
        return view('dashboard.config');
    }
}
