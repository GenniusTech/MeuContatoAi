<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAppController extends Controller
{
    public function app (){
        $auth = Auth::user();
       

        $links = Link::where('user_id', $auth->id)->get();
        $urls = [];
    
        foreach($links as $link) {
            $rota = $link->rota;
            $url = config('app.url') . '/' . $rota;
            array_push($urls, $url);
        }

        return view('dashboard.myapp',['urls' => $urls]);
    }
 

}
