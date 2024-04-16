@extends('app')
@section('title', 'Detalhe do Cliente')
@section('content')
<div class="card">
    <div class="card-header">
        Detalhes do Cliente {{ $client->nome }}
    </div>
</div>

<div class="card-body">
    <p><strong>ID: </strong> {{ $client->id }}</p>
    <p><strong>Nome: </strong> {{ $client->nome }}</p>
    <p><strong>Endereço: </strong> {{ $client->endereco }}</p>
    <p><strong>Observação: </strong> {{ $client->observacao }}</p>
    <br>
    <a class="btn btn-success" href="{{route('clients.index')}}">Voltar para a lista de clientes, se você quiser ver outro cliente, ta bom? meu usuário favorito</a>
</div>
@endsection
