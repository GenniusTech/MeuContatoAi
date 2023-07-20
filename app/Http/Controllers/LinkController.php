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
    
                    // Increment the lead value by 1
                    $connection->lead += 1;
                    $connection->save();
    
                    // Redirect to the connection URL
                    return redirect($connection->url);
                }
            } else {
                // If the user doesn't exist or has status other than 1, redirect to the dashboard.
                return redirect()->route('app');
            }
        }
    
        return redirect()->route('index');
    }
    

}
