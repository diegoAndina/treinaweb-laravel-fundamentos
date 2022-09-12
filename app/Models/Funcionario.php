<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    protected $fillable = [
        'nome', 'cpf', 'situacao', 'salario', 'data_contratacao', 'data_demissao'
    ];
    use HasFactory;
}
