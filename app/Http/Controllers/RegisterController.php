<?php

namespace App\Http\Controllers;

use App\Models\Guia;
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
        'password' => bcrypt($request->input('password')),
        'status' => 1
    ];

    $user = User::create($dataUser);

    if ($user) {
        Auth::login($user);

        $guia = new Guia();
        $guia->produto = 'Men MeuContatoAI';
        $guia->codigo = '0001';
        $guia->valor = 29.90;
        $guia->vencimento = now()->toDateString(); // Define a data de vencimento para a data atual
        $guia->user_id = $user->id;
        $guia->save();

        return redirect()->route('dashboard');
    }

    return redirect()->back()->withErrors('Erro! Falha ao cadastrar o usuário!');
}

}
