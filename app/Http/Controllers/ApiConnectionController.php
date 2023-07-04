<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Link;
use Illuminate\Http\Request;

class ApiConnectionController extends Controller
{

    public function addConnection(Request $request)
    {
        // Validação dos dados recebidos
        $validatedData = $request->validate([
            'id_link' => 'required',
            'numero' => 'required',
            'url' => 'required',
            'lead' => 'required',
        ], [
            'id_link.required' => 'O campo id_link é obrigatório.',
            'numero.required' => 'O campo numero é obrigatório.',
            'url.required' => 'O campo url é obrigatório.',
            'lead.required' => 'O campo lead é obrigatório.',
        ]);

        // Criar uma nova instância do modelo Connection e atribuir os valores recebidos
        $connection = new Connection();
        $connection->id_link = $validatedData['id_link'];
        $connection->numero = $validatedData['numero'];
        $connection->url = $validatedData['url'];
        $connection->lead = $validatedData['lead'];

        // Salvar no banco de dados
        $connection->save();

        // Retornar uma resposta adequada
        return response()->json(['message' => 'Informações adicionadas com sucesso'], 200);
    }

    public function listConnection($id)
    {
        $connections = Connection::where('id_link', $id)->get();

        return response()->json($connections);
    }
    public function delConnection($id)
    {
        $connection = Connection::find($id);

        if ($connection) {
            $connection->delete();
            return response()->json(['message' => 'Registro excluído com sucesso']);
        } else {
            return response()->json(['message' => 'Registro não encontrado'], 404);
        }
    }

    public function excluirLink($id)
    {
        // Excluir todas as connections onde id_link seja igual ao enviado
        Connection::where('id_link', $id)->delete();

        // Excluir o link onde o id seja igual ao enviado
        $link = Link::find($id);
        if ($link) {
            $link->delete();
            return response()->json(true); // Retornar true se a exclusão for bem-sucedida
        }

        return response()->json(false); // Retornar false se o link não existir
    }


}
