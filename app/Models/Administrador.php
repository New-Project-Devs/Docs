<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;


class Administrador extends User
{
    protected $fillable =[
        'nome',
        'email',
        'username',
        'password',
        'foto_perfil'
    ];

    protected $hidden = [
        'password',
    ];

    use HasFactory;
}
