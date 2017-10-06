@extends('admin')

@section('title', '| Ocorrências de Hoje')

@section('content')

    <h1 class="page-header">Ocorrências de hoje&nbsp;<small>{{date('d/m/Y')}}</small></h1>
    <div class="container col-md-6">
        <ul class="list-group">
            @forelse($ocorrencias as $item)
                <li class="list-group-item"><h3>{{$item->aluno->nome}}
                &nbsp;<a href="/frequencia/admin/{{$item->id}}" class="btn btn-primary">Ver</a>
                </h3></li>
            @empty
                <li class="list-group-item"><h3>Não houveram ocorrências no dia de hoje.</h3></li>
            @endforelse
        </ul>
    </div>

@endsection