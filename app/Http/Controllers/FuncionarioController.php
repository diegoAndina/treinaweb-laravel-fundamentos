<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{

    /**
     * metodo testar
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('funcionarios.index', [
            'funcionarios' => Funcionario::orderBy('nome')->paginate(10),
            'listaTodos' => false,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFuncionarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuncionarioRequest $request)
    {
        $form_dados = $request->except('_token');

        Funcionario::create($form_dados);
        return redirect()->route('funcionarios.index');
    }

    public  function salvar()
    {
        $data = [
            [
                "nome" => "Angelica Perry",
                "cpf" => "488178601",
                "data_contratacao" => "2007-03-29",
                "situacao" => "1",
                "salario" => "4789.24"
            ],
            [
                "nome" => "Doris Mosley",
                "cpf" => "226921362",
                "data_contratacao" => "2016-11-10",
                "situacao" => "0",
                "salario" => "824.67"
            ],
            [
                "nome" => "Brady Savage",
                "cpf" => "264439345",
                "data_contratacao" => "2004-03-23",
                "situacao" => "0",
                "salario" => "9401.98"
            ],
            [
                "nome" => "Lenore Chaney",
                "cpf" => "137653125",
                "data_contratacao" => "1992-01-08",
                "situacao" => "1",
                "salario" => "1577.54"
            ],
            [
                "nome" => "Shay Delaney",
                "cpf" => "435264786",
                "data_contratacao" => "2011-05-28",
                "situacao" => "0",
                "salario" => "596.53"
            ],
            [
                "nome" => "Kirsten Madden",
                "cpf" => "316708838",
                "data_contratacao" => "1994-06-17",
                "situacao" => "1",
                "salario" => "7851.84"
            ],
            [
                "nome" => "Matthew Haney",
                "cpf" => "8639884",
                "data_contratacao" => "2016-09-18",
                "situacao" => "0",
                "salario" => "9199.99"
            ],
            [
                "nome" => "Piper Hurst",
                "cpf" => "452864681",
                "data_contratacao" => "2018-06-25",
                "situacao" => "0",
                "salario" => "5690.88"
            ],
            [
                "nome" => "Darrel Gillespie",
                "cpf" => "46569971K",
                "data_contratacao" => "1992-11-19",
                "situacao" => "0",
                "salario" => "2721.91"
            ],
            [
                "nome" => "Basil Harrison",
                "cpf" => "188388175",
                "data_contratacao" => "2015-04-12",
                "situacao" => "1",
                "salario" => "7351.75"
            ],
            [
                "nome" => "Kibo Church",
                "cpf" => "15176261",
                "data_contratacao" => "2002-04-14",
                "situacao" => "0",
                "salario" => "8077.34"
            ],
            [
                "nome" => "Sigourney Wood",
                "cpf" => "263239199",
                "data_contratacao" => "2002-11-25",
                "situacao" => "1",
                "salario" => "1284.37"
            ],
            [
                "nome" => "Nicholas Lynch",
                "cpf" => "12295138",
                "data_contratacao" => "2006-11-13",
                "situacao" => "0",
                "salario" => "4363.84"
            ],
            [
                "nome" => "Kiona Giles",
                "cpf" => "454886038",
                "data_contratacao" => "2022-03-17",
                "situacao" => "0",
                "salario" => "7053.02"
            ],
            [
                "nome" => "Dante Bender",
                "cpf" => "323211744",
                "data_contratacao" => "2001-04-03",
                "situacao" => "0",
                "salario" => "6579.52"
            ],
            [
                "nome" => "Barclay Emerson",
                "cpf" => "202902693",
                "data_contratacao" => "2014-01-15",
                "situacao" => "0",
                "salario" => "3935.85"
            ],
            [
                "nome" => "Samuel Yates",
                "cpf" => "344939578",
                "data_contratacao" => "2000-03-23",
                "situacao" => "0",
                "salario" => "6014.74"
            ],
            [
                "nome" => "Marsden Hobbs",
                "cpf" => "145501571",
                "data_contratacao" => "2009-12-19",
                "situacao" => "0",
                "salario" => "5391.00"
            ],
            [
                "nome" => "Allen Barnes",
                "cpf" => "37479470",
                "data_contratacao" => "1992-02-05",
                "situacao" => "1",
                "salario" => "8826.22"
            ],
            [
                "nome" => "Zachary Morton",
                "cpf" => "332908553",
                "data_contratacao" => "2007-05-09",
                "situacao" => "1",
                "salario" => "9676.10"
            ]
        ];

        foreach ($data as $dados) {
            Funcionario::create($dados);
            // print_r($dados);
            // echo "<hr>";
            // # code...

        }
        return redirect('/funcionarios');
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
