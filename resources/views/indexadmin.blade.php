@extends('admin')

@section('title', '| Dashboard Admin')

@section('content')
    <div class="container text-center">
    @if (Auth::check())
        <h1>Seja bem-vindo! Navegue à vontade!</h1>
        </div>
        <div class="col-md-6">
            <h2>Informações:</h2>
            <h3>
            <ul>
                <li>Nº de Alunos presentes no dia:</li>
                <li>Botão</li>
                <li></li>
                <li></li>
            <ul>
            </h3>
        </div>
        <div class="col-md-6">
        <h2>Ações:</h2>
        </div>
       
    @else
    <h1>
    Seja bem vindo ao sistema, faça o Login para continuar!
    </h1>
    @endif
    </div>
@endsection