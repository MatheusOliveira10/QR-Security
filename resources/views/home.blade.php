@extends('main')

@section('title', '| Trabalho Matheus e Maxwell')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>Bem-Vindo ao QR Security!</h3>
        <p>Melhor sistema de gerenciamento de alunos da história
        da ETEC Pedro Ferreira Alves</p>
      </div>
    </div>

    <div class="item">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>Binho é foda</h3>
        <p>Programa pra krl, precisa mostrar os AJAX pra noix</p>
      </div>
    </div>

    <div class="item">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>Maromo também é!</h3>
        <p>Prefiro ficar na merda e lamber cerveja!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<div class="col-md-6">
  <h2>O Que é o QR Security?</h2>
  <p class="text-justify">
  O QR Security é um projeto de conclusão
  de curso (TCC), feito durante o ano de
  2017 na ETEC Pedro Ferreira Alves no
  curso de Ensino Médio Integrado a 
  Informática para Internet.
  </p>
  <p class="text-justify">
  Trata-se de um sistema para controle de
  fluxo de alunos na escola por meio de 
  códigos QR (Quick Response Code), que
  estarão nas carteirinhas dos alunos
  possibilitando também que seus responsáveis
  tenham ciência da frequência do aluno.
  </p>
  <p class="text-justify">
  O objetivo é propiciar melhor relação entre
  pais e escola, além de melhorar os meios de
  combate a evasão escolar, um dos principais
  objetivos da instituição.
  </p>
</div>
<div class="col-md-6">
      <img src="../images/qrcode.jpg" style="width: 550px; height: 300px;">
</div>
        <div class="col-md-12">
            <div class="text-center">
            <hr>
        <h1>Os Desenvolvedores:</h1>
        <br />
          <div class="col-md-6">
            <img src="../images/qrcode.jpg" alt="Matheus Oliveira" height="400" width="400" style="border-radius: 250px;">
            <br />
            <h3>Matheus Oliveira</h3>
            <p align="justify">Nascido na cidade de Conchal-SP, tem 16 anos e está cursando o último
            ano do curso técnico de Informática para a Internet na ETEC Pedro Ferreira Alves, torce para o São Paulo Futebol Clube. É iniciante
            em Laravel, porém procura se aprofundar no assunto, com alguns projetos extras pretende 
            expandir seu conhecimento afim de se preparar melhor para os desafios do Programador Web.</p>
          </div>
          <div class="col-md-6">
            <img src="../images/tt.png" alt="Matheus Oliveira" height="400" width="400" style="border-radius: 250px;">
            <br />
            <h3>Maxwell Arruda</h3>
            <p align="justify">Nascido na cidade de Conchal-SP, tem 16 anos e está cursando o último
            ano do curso técnico de Informática para a Internet na ETEC Pedro Ferreira Alves, torce para o São Paulo Futebol Clube. É iniciante
            em Laravel, porém procura se aprofundar no assunto, com alguns projetos extras pretende 
            expandir seu conhecimento afim de se preparar melhor para os desafios do Programador Web.</p>
          </div>

        </div>
        </div>
        </div>

@endsection


  
     
