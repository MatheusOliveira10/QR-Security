@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/alunos/{{ $aluno->foto }}" style="width:150px; height:200px; float:left; margin-right:5%;">
            <h2>{{$aluno->nome}}</h2>
            <br />
            <div class="col-md-1">
                <h4>RM:</h4> {{$aluno->id}}
                <h4>Sala:</h4> {{$aluno->sala->nome}}
                <h4>Responsável:</h4> {{$aluno->user->name}}
            </div>
            <div class="col-md-4 col-md-offset-2">
                <h4>Número de dias que veio à escola:</h4> {{$frequencia}}
            </div>       

        </div>
    </div>
</div>
@endsection