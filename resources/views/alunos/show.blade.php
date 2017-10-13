@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/alunos/{{ $aluno->foto }}" style="width:150px; height:200px; float:left; margin-right:5%;">
            <h2>{{$aluno->nome}}</h2>
            <br />
            <div class="col-md-3">
                <ul class="list-group" style="background-color: transparent">
                    <li class="list-group-item" style="background-color: transparent"><h4>RM:</h4> {{$aluno->id}}</li>
                    <li class="list-group-item" style="background-color: transparent"><h4>Sala:</h4> {{$aluno->sala->nome}}</li>
                </ul>    
            </div>
            <div class="col-md-5">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: transparent">
                        <h4>Número de dias que veio à escola:</h4> {{$frequencia}}
                    </li>    
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: transparent"><h3>Responsável: <button class="btn btn-primary" data-toggle="collapse" data-target="#responsavel">Expandir</button></h3></li>
                    <div class="collapse" id="responsavel">
                        <li class="list-group-item" style="background-color: transparent"><h3>Nome: {{$pai->name}}</h3></li>
                        <li class="list-group-item" style="background-color: transparent"><h3>E-Mail: {{$pai->email}}</h3></li>
                    </div>
                </ul>
                </ul>

            </div>       

        </div>
    </div>
</div>
@endsection