<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function handle($any)
    {
        $link = Link::where('rota', $any)->first();

        if ($link) {
            $user = User::find($link->user_id);

            if ($user && $user->status == 1) {
                $connections = $link->connections()->orderBy('lead')->take(20)->get();

                if ($connections->isNotEmpty()) {
                    $connection = $connections->first();

                    $connection->lead += 1;
                    $connection->save();

                    return redirect($connection->url);
                }
            } else {
                return redirect()->route('app');
            }
        }

        return redirect()->route('index');
    }


}
