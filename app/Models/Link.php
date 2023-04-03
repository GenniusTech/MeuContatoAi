<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Link extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'links';

    protected $fillable = [
        'user_id',
        'numero',
        'rota',
        'mensagem',
        'url'
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
