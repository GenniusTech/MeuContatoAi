<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;

    protected $table = 'guias';

    protected $fillable = [
        'produto', 
        'codigo', 
        'valor', 
        'vencimento', 
        'user_id'
    ];
}
