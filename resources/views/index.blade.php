@extends('main')

@section('content')
<div class="container">
<h1>Seja bem vindo(a) <strong>{{$nome}}</strong></h1>
  <ul>
    <li><h3>Dias que o(a) {{$aluno->nome}} veio à escola: {{$dias}}</h3></li>
  </ul>
</div>
@endsection