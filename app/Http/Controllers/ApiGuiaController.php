<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use Illuminate\Http\Request;

class ApiGuiaController extends Controller
{
    public function addGuia(Request $request)
    {
        // Validate the request data
        $request->validate([
            'produto' => 'required',
            'codigo' => 'required',
            'valor' => 'required|numeric',
            'vencimento' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new Guia instance
        $guia = new Guia();
        $guia->produto = $request->input('produto');
        $guia->codigo = $request->input('codigo');
        $guia->valor = $request->input('valor');
        $guia->vencimento = $request->input('vencimento');
        $guia->user_id = $request->input('user_id');

        // Save the Guia
        $saved = $guia->save();

        // Return the response indicating success or failure
        return response()->json(['success' => $saved]);
    }
}
