<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = [
        'logradouro', 'numero', 'bairro', 'cidade', 'complemento', 'cep', 'estado',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
