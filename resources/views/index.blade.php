@extends('main')

@section('content')

<div class="container col-md-7">
<h1 class="page-header">Olá, {{$nome}}</h1>
  <ul class="list-group">
    <li class="list-group-item"><h3>Número de Alunos presentes hoje: {{$alunosdia}}</h3></li>
  </ul>
    @foreach($alunos as $item)
    <ul class="list-group">
      <li class="list-group-item"><h3>Ocorrências {{$item->nome}}: <button class="btn btn-primary" data-toggle="collapse" data-target="#aluno{{$item->id}}">Expandir</button></h3></li>
      <div class="collapse" id="aluno{{$item->id}}">
      <li class="list-group-item"><h3>Sem Carteirinha: {{$carteirinha}}</h3></li>
      <li class="list-group-item"><h3>Sem Uniforme: {{$uniforme}}</h3></li>
      <li class="list-group-item"><h3>Atrasado:  {{$atraso}}</h3></li>
      <li class="list-group-item"><h3>Sem Carteirinha e Sem Uniforme: {{$caruni}}</h3></li>
      <li class="list-group-item"><h3>Sem Carteirinha e Atrasado: {{$caratr}}</h3></li>
      <li class="list-group-item"><h3>Atrasado e Sem Uniforme: {{$uniatr}}</h3></li>
      </div>
  </ul>
  @endforeach
</div>
@endsection