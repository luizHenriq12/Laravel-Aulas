@extends('app')
@section('title', 'Novo Cliente')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input
                type="text"
                class="form-control"
                id="nome"
                name="nome"
                placeholder="Digite o nome"
            >
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input
                type="text"
                class="form-control"
                id="endereco"
                name="endereco"
                placeholder="Digite o Endereço"
            >
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea
                name="observacao"
                id="observacao"
                class="form-control"
                rows="3">
            </textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
