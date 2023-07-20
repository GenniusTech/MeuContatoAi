<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
       
    }

    public function login_action(Request $request){
        
        $credentials = $request->only(['email', 'senha']);
        $auth = [
            'email'=> $credentials['email'],
            'password' => $credentials['senha']
        ];

        if (Auth::guard('web')->attempt($auth)) {
            // Autenticação bem-sucedida
            return redirect()->route('dashboard');
        } else {
            // Autenticação falha
            return redirect()->back()->with('error', 'Dados fornecidos inválidos!');
        }
    }
}
