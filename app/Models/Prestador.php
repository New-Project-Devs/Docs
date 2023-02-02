<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Prestador extends User
{
    protected $fillable =[
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'cpf',
        'insc_municipal',
        'insc_estadual',
        'segmento',
        'tipo_endereco',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'cep',
        'cidade',
        'estado',
        'telefones',
        'emails',
        'obs',
        'logo_empresa',
    ];

    protected $hidden = [
        'password',
    ];
    use HasFactory;
}
