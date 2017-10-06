@extends('admin')

@section('title', '| Dashboard Admin')

@section('content')
    <div class="container text-center">
    @if (Auth::check())
        <h1 class="page-header">Seja bem-vindo! Navegue à vontade!</h1>
        </div>
        <div class="col-md-6">
            <h2 class="page-header">Informações:</h2>
            <h3>
            <div class="well">
                <h3>Nº de Alunos presentes no dia: {{$alunosdia}}</h3>
            </div>
            <div class="well">
                <h3>Número de Ocorrências do dia: {{$ocorrencias}} <a href="/frequencia/ocorrencias" class="btn btn-primary pull-right">Ver Todas</a></h3>
            </div>
            </h3>
        </div>
        <div class="col-md-6">
        <h2 class="page-header">Últimos alunos que entraram:</h2>
            @foreach($ultimos as $item)
            <div class="well">
                <h3>
                    {{$item->aluno->nome}} - {{$item->aluno->sala->nome}}
                    <a class="pull-right btn btn-primary" href="/frequencia/admin/{{$item->id}}">Detalhes</a>
                </h3>
            </div>
            @endforeach
         </div>

       
    @else
    <h1>
    Seja bem vindo ao sistema, faça o Login para continuar!
    </h1>
    @endif
    </div>
@endsection