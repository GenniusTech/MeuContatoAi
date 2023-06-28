<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function handle($any)
    {
        $link = Link::where('rota', $any)->first();

        if ($link) {
            $connections = $link->connections()->orderBy('lead')->take(20)->get();

            if ($connections->isNotEmpty()) {
                $connection = $connections->first();

                // Incrementa o valor de lead em 1
                $connection->lead += 1;
                $connection->save();

                // Redireciona para a URL do connection
                return redirect($connection->url);
            }
        }

        // Redireciona para a rota "index" (ou qualquer outra rota padrão que você definiu)
        return redirect()->route('index');
    }

}
