<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
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
    use HasFactory;
}
