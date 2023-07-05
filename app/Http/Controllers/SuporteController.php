<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suporte;
use Illuminate\Support\Facades\Validator;

class SuporteController extends Controller
{
    public function addSuporte(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'tipo' => 'required',
            'conteudo' => 'required'
        ];

        $messages = [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de e-mail válido.',
            'tipo.required' => 'O campo tipo é obrigatório.',
            'conteudo.required' => 'O campo conteúdo é obrigatório.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data_cadastro = date('d-m-Y H:i:s');

        $suporte = new Suporte;
        $suporte->email = $request->email;
        $suporte->tipo = $request->tipo;
        $suporte->conteudo = $request->conteudo;
        $suporte->data_cadastro = $data_cadastro;
        $suporte->save();

        return response()->json(['message' => 'Suporte adicionado com sucesso', 'suporte' => $suporte], 201);
    }


    public function upSuporte(Request $request, $id)
    {
        $suporte = Suporte::find($id);

        if (!$suporte) {
            return response()->json(['message' => 'Registro de suporte não encontrado'], 404);
        }

        $suporte->resposta = $request->resposta;
        $suporte->data_resposta = date('d-m-Y H:i:s');
        $suporte->save();

        return response()->json(['message' => 'Suporte atualizado com sucesso', 'suporte' => $suporte], 200);
    }

}
