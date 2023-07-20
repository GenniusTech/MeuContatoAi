<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateLinkController extends Controller
{
    public function create (){
        return view('dashboard.criarLink');
    }

    public function createLink(Request $request) {
        $auth = Auth::user();
        $user = new Link();
    
        if (!$auth) {
            return redirect()->route('create')->with('error', 'Erro ao cadastrar link!');
        }
    
        $user->user_id = $auth->id;
    
        if ($request->has('rota')) {
            $rota = $request->input('rota');
            if (!$rota) {
                return redirect()->route('create')->with('error', 'Indique um link!!');
            }
    
            $rotaExistente = Link::where('rota', $rota)->first();
            if ($rotaExistente) {
                return redirect()->route('create')->with('error', 'Já existe um link com essa caracteristica!');
            }
    
            $user->rota = $rota;
        }
    
        if ($request->has('mensagem')) {
            $mensagem = $request->input('mensagem');
            if (!$mensagem) {
                return redirect()->route('create')->with('error', 'Campo mensagem vazio!');
            }
            $user->mensagem = $mensagem;
        }
    
        $user->save();
    
        // Redirect to the editLink route with the ID of the created link
        return redirect()->route('editLink', ['id' => $user->id])->with('success', 'Link Criado Com Sucesso!');
    }
    

}
