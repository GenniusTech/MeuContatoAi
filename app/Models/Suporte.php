<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory;

    protected $table = 'suporte';
    protected $fillable = [
        'email', 
        'tipo', 
        'conteudo', 
        'data_cadastro', 
        'resposta', 
        'data_resposta'
    ];
    protected $dates = [
        'data_cadastro', 
        'data_resposta'
    ];
}
