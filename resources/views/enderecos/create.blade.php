@extends('app')

@section('titulo', 'Novo endereço')

@section('conteudo')
    <div style='max-width:600px ;'>

        <h1>Novo endereço</h1>

        <form action="{{ route('enderecos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="funcionario_id" class="form-label">Id do funcionario</label>
                <input type="number" class="form-control" id="funcionario_id" name="funcionario_id"
                    placeholder="Digite o id do funcionario a quem quer cadastrar o endereço"
                    value="{{ old('funcionario_id') }}" autofocus='on'>
                <x-mostra-erros name='funcionario_id'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro"
                    placeholder="Digite o logradouro" value="{{ old('logradouro') }}" autofocus='on'>
                <x-mostra-erros name='logradouro'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número"
                    value="{{ old('numero') }}" required>
                <x-mostra-erros name='numero'></x-mostra-erros>

            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro"
                    value="{{ old('bairro') }}" required>
                <x-mostra-erros name='bairro'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o cidade"
                    value="{{ old('cidade') }}" required>
                <x-mostra-erros name='cidade'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento"
                    placeholder="Digite o complemento" value="{{ old('complemento') }}">
                <x-mostra-erros name='complemento'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">Cep</label>
                <input type="number" class="form-control" id="cep" name="cep" placeholder="Digite o cep"
                    value="{{ old('cep') }}" required>
                <x-mostra-erros name='cep'></x-mostra-erros>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado"
                    value="{{ old('estado') }}" required>
                <x-mostra-erros name='estado'></x-mostra-erros>
            </div>




            <button class="btn btn-success" type="submit">Salvar </button>

        </form>
    </div>

@endsection
