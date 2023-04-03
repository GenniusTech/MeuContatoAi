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
        return redirect()->to($link->url);
    }

    return redirect()->route('index');
}

}
