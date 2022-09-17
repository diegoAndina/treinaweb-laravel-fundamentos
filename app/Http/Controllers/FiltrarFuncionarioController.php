<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FiltrarFuncionarioController extends Controller
{
    public function filtrarDados(Request $request)
    {
        // --------------------- PEGA OS  DADOS DA REQUEST EXCETO O TOKEN  ----------------------------------------------
        $formRequest = $request->except('_token');
        // --------------------- CONVERTE PARA LOWECASE O CAMPO NOME DA REQUEST  ----------------------------------------------
        $nome_valido = Str::lower($formRequest['nome']);

        // --------------------- FAZ A VALIDAÇÃO DOS  DADOS DA REQUEST  ----------------------------------------------
        $request->validate([
            'nome' => 'required'
        ]);

        // --------------------- BUSCA NO BANCO DE DADOS FILTRANDO PELO CAMPO NOME-----------------------------
        $funcionarios = Funcionario::orderBy('nome')->where('nome', 'LIKE', "%$formRequest[nome]%")
            ->paginate(10);

        // -------------------RETORNA A VIEW FUNCIONARIOS.INDEX-> COM OS DADOS  ------------------------------------------
        return view('funcionarios.index', [
            'funcionarios' => $funcionarios,
            'nome_valido' => $nome_valido,
            'listaTodos' => true,
        ]);
    }
}