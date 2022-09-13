<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FiltrarFuncionarioController extends Controller
{
    public function filtrarDados(Request $request)
    {
        // --------------------- PEGA OS  DADOS DA REQUEST EXCETO O TOKEN  -----------------------------
        $formRequest = $request->except('_token');

        // --------------------- FAZ A VALIDAÇÃO DOS  DADOS DA REQUEST  -----------------------------
        $request->validate([
            'nome' => 'required'
        ]);

        // --------------------- BUSCA NO BANCO DE DADOS FILTRANDO PELO CAMPO NOME-----------------------------
        $funcionarios = Funcionario::orderBy('nome')->where('nome', 'LIKE', "%$formRequest[nome]%")
            ->paginate(10);

        foreach ($funcionarios as $funcionario) {
            $string = $funcionario['nome'];

            $nomesAtuais = Str::of($string)
                ->replaceArray("$formRequest[nome]", ["<span class='text-info'>" . $formRequest['nome'] . "</span>"]);

            $funcionario['nome'] = $nomesAtuais;

            dump($funcionario['nome']);
        }

        // -------RETORNA A VIEW FUNCIONARIOS.INDEX-> COM OS DADOS  ---------------------
        return view('funcionarios.index', [
            'funcionarios' => $funcionarios,
            'nome_valido' => $formRequest['nome'],
            'listaTodos' => true,
        ]);
    }
}