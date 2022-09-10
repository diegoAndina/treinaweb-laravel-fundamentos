<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->nome && $request->situacao === "0" || $request->situacao === '1') {
            $funcionarios = Funcionario::where('nome', 'like', "%$request->nome%")
                ->where('situacao', $request->situacao);
            $funcionarios = $funcionarios->get();

            return view('funcionarios.index', [
                'funcionarios' => $funcionarios,
                'listaTodos' => true
            ]);
        }
        if ($request->nome) {

            $funcionarios = Funcionario::where('nome', 'like', "%$request->nome%");
            $funcionarios = $funcionarios->get();

            return view('funcionarios.index', [
                'funcionarios' => $funcionarios,
                'listaTodos' => true
            ]);
        }
        if ($request->situacao || $request->situacao === "0") {
            $funcionarios = Funcionario::where('situacao', $request->situacao);
            $funcionarios = $funcionarios->get();
            return view('funcionarios.index', [
                'funcionarios' => $funcionarios,
                'listaTodos' => true
            ]);
        }

        if ($request->situacao == null && $request->nome == null) {
            $funcionarios = Funcionario::all();

            return view('funcionarios.index', [
                'funcionarios' => $funcionarios,
                'listaTodos' => false
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFuncionarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuncionarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario, Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFuncionarioRequest  $request
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFuncionarioRequest $request, Funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        //
    }
}