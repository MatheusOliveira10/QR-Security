@extends('admin')

@section('title', '| Trabalho Matheus e Maxwell')

@section('content')
    <div class="container text-center">
    @if (Auth::check())
        <h1>Seja bem-vindo! Navegue à vontade!</h1>
        </div>
        <div class="col-md-6">
            <h2>Sobre:</h2>
            <p align="justify">Sistema desenvolvido por Matheus Oliveira
            como complemento da aula de Programação para a Web II. Nele
            o usuário logado tem a permissão de cadastrar Solicitantes e agendar eventos para
            o lugar desejado. O ponto forte do site é a facilidade de implementação
            e controle dos eventos agendados, além da facilidade de edição do código para 
            customização de acordo com as necessidades do cliente.</p>
        </div>
        <div class="col-md-6">
        <h2>O que foi utilizado?</h2>
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Tecnologias:</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>PHP</td>
            </tr>
            <tr>    
                <td>Laravel</td>
            </tr>
            <tr>
                <td>JavaScript</td>
            </tr>
            <tr>
                <td>HTML</td>
            </tr>
            <tr>
                <td>Bootstrap</td>
            </tr>
            <tr>
                <td>CSS</td>
            </tr>
            </tbody>
            </table>
        </div>
       
        <div class="col-md-12">
            <div class="text-center">
            <hr>
        <h1>O Desenvolvedor:</h1>
        <div class="col-md-12">
        <img src="Mattt.png" alt="Matheus Oliveira" height="500" width="500" style="border-radius: 250px;">
        <br />
        <h3>Matheus Oliveira</h3>
        <p align="justify">Nascido na cidade de Conchal-SP, tem 16 anos e está cursando o último
        ano do curso técnico de Informática para a Internet na ETEC Pedro Ferreira Alves, torce para o São Paulo Futebol Clube. É iniciante
        em Laravel, porém procura se aprofundar no assunto, com alguns projetos extras pretende 
        expandir seu conhecimento afim de se preparar melhor para os desafios do Programador Web.</p>
        </div>

        </div>
        </div>
        </div>
    @else
    <h1>
    Seja bem vindo ao sistema, faça o Login para continuar!
    </h1>
    @endif
    </div>
@endsection