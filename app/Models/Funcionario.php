<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cpf', 'situacao', 'salario', 'data_contratacao', 'data_demissao'
    ];

    /**
     *
     *
     * Define a relacao com endereço
     *
     */
    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}