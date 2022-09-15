<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;



class FiltrarFuncionarioController extends Controller
{
    public function filtrarDados(Request $request)
    {
        // --------------------- PEGA OS  DADOS DA REQUEST EXCETO O TOKEN  ----------------------------------------------
        $formRequest = $request->except('_token');
        $valorPesquisado = $formRequest['nome'];
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
            'nome_valido' => $formRequest['nome'],
            'listaTodos' => true,
            'valorPesquisado' => $valorPesquisado,
        ]);
    }
}