@extends('app')
@section('titulo', 'Lista de Funcionários')
@section('conteudo')
    <div class="container  ">
        <div class="row justify-content-center">
            <h1 class="col">Lista de Funcionários</h1>
            <div class="col">
                <form class="" action='/funcionarios/filtrar' method="get">
                    @csrf
                    @if (isset($nome_valido))
                        <input type="text" name="nome" id="nome" autofocus='true' placeholder="nome"
                            value="{{ $nome_valido }}" value="{{ old('nome') }}" style="width: 80px">
                    @else
                        <input type="text" name="nome" id="nome" autofocus='true' placeholder="nome"
                            value="" style="width: 80px">
                    @endif
                    <button type="submit" class="btn btn-info ">Filtrar</button>
                </form>
                <div class="" style="width: 200px">
                    <x-mostra-erros name='nome'></x-mostra-erros>
                </div>

            </div>
        </div>
    </div>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Situação</th>
                <th scope="col">Data contrataçao</th>
                <th scope="col">Ações
                    @if ($listaTodos)
                        <a href="{{ route('funcionarios.index') }}" class="ms-3 ">Listar todos</a>
                    @endif
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($funcionarios->count() == 0)
                <div class="alert alert-warning text-center fs-3 my-4">Sua pesquisa não retornou resultados!</div>
            @else
                @foreach ($funcionarios as $funcionario)
                    <tr>

                        @if (request()->get('nome') != null)
                            <td>
                                <a href="{{ route('funcionarios.show', $funcionario) }}">
                                    {{ $funcionario->nome }}
                                </a>
                            </td>
                        @else
                            <td>
                                <a href="{{ route('funcionarios.show', $funcionario) }}">
                                    {{ $funcionario->nome }}
                                </a>
                            </td>
                        @endif
                        @if ($funcionario->situacao)
                            <th scope="row">Ativo</th>
                        @else
                            <th scope="row">Inativo</th>
                        @endif
                        <td>{{ $funcionario->data_contratacao }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('funcionarios.edit', $funcionario) }}">Atualizar</a>
                            <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST"
                                style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="container  d-flex justify-content-center ">
        <div class="my-2  w-25">
            {{ $funcionarios->appends([
                    'nome' => request()->get('nome', null),
                ])->links() }}
        </div>
    </div>
    <a class="btn btn-success" href="{{ route('funcionarios.create') }}">Novo funcionario</a>
@endsection
