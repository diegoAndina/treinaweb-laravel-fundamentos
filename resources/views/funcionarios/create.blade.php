@extends('app')

@section('titulo', 'Novo funcionário')

@section('conteudo')
    <div style='max-width:600px ;'>

        <h1>Novo funcionário</h1>

        <form action="{{ route('funcionarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"
                    value="{{ old('nome') }}" autofocus='on'>
                <x-mostra-erros name='nome'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf"
                    value="{{ old('cpf') }}" required>
                <x-mostra-erros name='cpf'></x-mostra-erros>

            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salario</label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="Digite o salário"
                    value="{{ old('salario') }}" required>
                <x-mostra-erros name='salario'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="data_contratacao" class="form-label">Data contrataçao</label>
                <input type="text" class="form-control" id="data_contratacao" name="data_contratacao"
                    value="{{ old('data_contratacao') }}" placeholder="Defina a data de contratação" required>
                <x-mostra-erros name='data_contratacao'></x-mostra-erros>


            </div>
            <div class="mb-3">
                <label for="situacao" class="form-label">Situação do funcionário</label>
                <select name="situacao" class="mx-2">
                    <option value="{{ old('data_contratacao') }}">Escolha </option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>

                </select>
                <x-mostra-erros name='situacao'></x-mostra-erros>
            </div>
            <button class="btn btn-success" type="submit">Salvar </button>

        </form>
    </div>

@endsection
