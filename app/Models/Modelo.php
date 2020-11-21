<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
//    o nome da tabela
    protected $table = "formulario";
    //nome das colunas da tabela
    protected $fillable =[
        'nome',
        'email',
        'telefone',
        'endereco',
        'cidade ',
        'tipo',
        'preco',
        'carros',
    ];
}

