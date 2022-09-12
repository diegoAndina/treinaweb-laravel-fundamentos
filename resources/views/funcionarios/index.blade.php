@extends('app')

@section('titulo', 'Lista de Funcionários')
@section('conteudo')
    <div class="container  ">

        <div class="row justify-content-center">
            <h1 class="col">Lista de Funcionários</h1>
            <div class="col">

                <form class="" action="{{ route('funcionarios.index') }}" method="get">
                    @csrf
                    <input type="text" name="nome" id="nome" autofocus='true' placeholder="nome"
                        style="width: 80px">
                    <select name="situacao" id="">
                        <option value="">Escolha</option>
                        <option value="1">Ativos</option>
                        <option value="0">Inativos</option>
                    </select>
                    <button type="submit" class="btn btn-success ">Filtrar</button>
                </form>
            </div>
        </div>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Situação</th>
                <th scope="col">Nome</th>
                <th scope="col">Data contrataçao</th>
                <th scope="col">Ações
                    @if ($listaTodos)
                        <a href="{{ route('funcionarios.index') }}" class="ms-3 ">Listar todos</a>
                    @endif
                </th>


            </tr>
        </thead>
        <tbody>

            @foreach ($funcionarios as $funcionario)
                <tr>
                    @if ($funcionario->situacao)
                        <th scope="row">Ativo</th>
                    @else
                        <th scope="row">Inativo</th>
                    @endif
                    <td><a href="{{ route('funcionarios.show', $funcionario) }}">{{ $funcionario->nome }}</a></td>
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
        </tbody>
    </table>
    <div class="my-3 container">
        {{ $funcionarios->links() }}
    </div>
    <a class="btn btn-success" href="{{ route('funcionarios.create') }}">Novo funcionario</a>
@endsection
