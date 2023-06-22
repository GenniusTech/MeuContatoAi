<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ];
    
        $user = User::create($dataUser);
    
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }
    
        return redirect()->back()->withErrors('Erro! Falha ao cadastrar o usuário!');
    }
}
