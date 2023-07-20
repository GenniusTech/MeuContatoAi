<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class MyAppController extends Controller
{
    public function app()
    {
        $auth = Auth::user();
        $links = Link::where('user_id', $auth->id)->get();
        $urls = [];
    
        foreach ($links as $link) {
            $rota = $link->rota;
            $url = config('app.url') . '/' . $rota;
            
            // Crie um objeto com as propriedades 'id' e 'url'
            $urlObject = new stdClass();
            $urlObject->id = $link->id;
            $urlObject->url = $url;
    
            array_push($urls, $urlObject);
        }
    
        return view('dashboard.meusLinks', ['urls' => $urls]);
    }
    

    public function editLink($id){

        $link = Link::find($id);

        // Verificar se o link foi encontrado
        if (!$link) {
            return redirect()->back()->with('error', 'Link não encontrado');
        }
        return view('dashboard.editarLink', compact('link'));
    }

    public function editarLink($id)
    {
        // Recuperar o link pelo ID
        $link = Link::find($id);
    
        // Verificar se o link existe e se o user_id é igual ao ID do usuário logado
        if ($link && $link->user_id == auth()->user()->id) {
            // Exemplo de atualização do número de WhatsApp e mensagem inicial
            $numeroWhatsApp = request()->input('numero_whatsapp');
            $mensagemInicial = request()->input('mensagem_inicial');
    
            // Faça as alterações necessárias no link com o ID fornecido
            $link->numero = $numeroWhatsApp;
            $link->mensagem = $mensagemInicial;
            $link->save();
    
            // Redirecionar para a página anterior ou para onde você preferir
            return redirect()->back()->with('success', 'Link atualizado com sucesso!');
        }
    
        // Redirecionar caso o link não exista ou não pertença ao usuário logado
        return redirect()->back()->with('error', 'Não foi possível atualizar o link.');
    }
    


}
