<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function config() {
        $usuario = Auth::user();
        $user = User::where('id', $usuario->id)->get();
        $telefoneFormatado = $this->formatarTelefone($user->first()->tell); // assume que o número de telefone está armazenado na coluna "telefone"
        return view('dashboard.config', [
            'telefoneFormatado' => $telefoneFormatado,
            'user' => $user->first(),
        ]);
    }
    
    private function formatarTelefone($telefone)
    {
        return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 4) . '-' . substr($telefone, 6);
    }

    public function update(Request $request) {
        $auth = Auth::user();
        $user = User::where('id', $auth->id)->first();
    
        if (!$user) {
            return response()->json(['message' => 'Conta não encontrada'], 404);
        }
    
        if ($request->has('email')) {
            $email = $request->input('email');
            if (!$email) {
                return redirect()->route('config')->with('success', 'O campo Email não pode ser nulo!');
            }
            $user->email = $email;
        }
        
        if ($request->has('name')) {
            $name = $request->input('name');
            if (!$name) {
                return redirect()->route('config')->with('success', 'O campo Nome não pode ser nulo!');

            }
            $user->name = $name;
        }
        if ($request->has('tell')) {
            $telefone = preg_replace('/\D/', '', $request->input('tell')); // remove todos os caracteres que não são dígitos
            $user->tell = $telefone;
        }
        
    
        $user->save();
    
        return redirect()->route('config');
    }
    
   
}
