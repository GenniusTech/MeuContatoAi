<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateLinkController extends Controller
{
    public function create (){
        return view('dashboard.create');
    }

    public function createLink(Request $request) {
        $auth = Auth::user();
        $user = new Link(); // utilize a palavra "new" para criar um novo objeto "Link"
        
        if (!$auth) { // verifique se há um usuário autenticado
            return redirect()->route('create')->with('success', 'Erro ao cadastrar link!');
        }
        
        $user->user_id = $auth->id; // atribua o id do usuário autenticado para o campo "user_id"
            
        if ($request->has('numero')) {
            $numero = $request->input('numero');
            if (!$numero) {
                return redirect()->route('create')->with('success', 'Numero não encontrado!');
    
            }
            $user->numero= $numero;
        }
        if ($request->has('rota')) {
            $rota = $request->input('rota'); 
            if (!$rota) {
                return redirect()->route('create')->with('success', 'Cadastre um link!');
            }
        
            // Verificar se a rota já está sendo utilizada
            $rotaExistente = Link::where('rota', $rota)->first();
            if ($rotaExistente) {
                return redirect()->route('create')->with('error', 'Já existe um link com essa caracteristica!');
            }
        
            $user->rota = $rota;
        }
        
    
        if ($request->has('mensagem')) {
            $mensagem = $request->input('mensagem');
            if (!$mensagem) {
                return redirect()->route('create')->with('success', 'Campo mensagem vazio!');
    
            }
            $user->mensagem = $mensagem;
        }

        if ($request->has('numero') && $request->has('mensagem')) {
            $numero = $request->input('numero');
            $mensagem = $request->input('mensagem');
            $url = "https://api.whatsapp.com/send?phone=55{$numero}&text={$mensagem}";
            $user->url = $url;
        }
        
      
        
               
        $user->save();
    
        return redirect()->route('create')->with('success', 'Link Criado Com Sucesso!');
    }
    
}
