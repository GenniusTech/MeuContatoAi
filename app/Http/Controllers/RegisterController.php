<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        return view('registrer');
    }

    public function register_action(Request $request)
    {   
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $dataUser = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password'=> bcrypt($request->get('password'))
        ];

        $userCreate = User::create($dataUser);
       
        if ($userCreate) {
         
            return redirect()->route('login');
        }

        redirect()->back()->withErrors('Erro! Falha ao cadastrar o usuário!');
    }
}
