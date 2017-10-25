@extends('admin')

@section('title', '| Saídas do Aluno')

@section('content')

    <h1 class="page-header">Detalhes Saida&nbsp;<small>{{$saida->created_at->format('d/m/Y')}}</small></h1>
    <div class="container col-md-6">
        <ul class="list-group">
            <li class="list-group-item"><h2>Aluno:</h2><h3>{{$aluno->nome}}<h3></li>
            <li class="list-group-item"><h2>Horário:</h2><h3>{{$saida->created_at->toTimeString()}}</h3></li>
        </ul>
    </div>

@endsection