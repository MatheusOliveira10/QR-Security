@extends('main')

@section('title', '| Home')

@section('content')
  <div class="container jumbotron">
    <h1 class="text-center animated slideInLeft" style="text-shadow: 2px 2px #000;">Seja Bem Vindo ao QR Security</h1>
    <hr>
    <h4 class="text-center animated slideInRight" style="font-size:26px;text-shadow: 2px 2px #000;">Sistema de Gerenciamento de Alunos.</h4>
  </div>
  <div class="col-md-6 card card-5 animated slideInLeft">
    <h1 class="animated slideInLeft" style="color: #fff;">O Que é o QR Security?</h1>
      <p class="text-justify animated slideInLeft" style="font-size:17px; color: #fff;">
      O QR Security é um projeto de conclusão
      de curso (TCC), feito durante o ano de
      2017 na ETEC Pedro Ferreira Alves no
      curso de Ensino Médio Integrado a 
      Informática para Internet.
      </p>
      <p class="text-justify animated slideInLeft" style="font-size:17px; color: #fff;">
      Trata-se de um sistema para controle de
      fluxo de alunos na escola por meio de 
      códigos QR (Quick Response Code), que
      estarão nas carteirinhas dos alunos
      possibilitando também que seus responsáveis
      tenham ciência da frequência do aluno.
      </p>
      <p class="text-justify animated slideInLeft" style="font-size:17px; color: #fff;">
      O objetivo é propiciar melhor relação entre
      pais e escola, além de melhorar os meios de
      combate a evasão escolar, um dos principais
      objetivos da instituição.
      </p>
  </div>
  <div class="col-md-6">
      <img class="animated slideInRight" src="../images/qrcode.jpg" style="width: 100%; height: 54%;padding-top:50px;">
  </div>
        <div class="col-md-12">
        <hr>
        <p class="text-center" style="font-size:24px; text-shadow: 2px 2px #000;">Desenvolvedores:</p>
        <br />
          <div class="col-md-3 well2">
            <img src="../images/desenvolvedores/Manera.jpg" alt="Lucas Manera" height="70%" width="70%" style="border-radius: 250px; margin-left: 40px;">
            <br />
            <h3 class="text-center" style="text-shadow: 2px 2px #000;">Lucas Manera</h3>
            <p class="text-justify" style="font-size:17px; text-shadow: 2px 2px #000;">Nascido na cidade de Mogi Mirim-SP, tem 17 anos, está cursando o último ano 
            do curso técnico de Informática para Internet da ETEC Pedro Ferreira Alves. Torce para o Sport 
            Clube Corinthians Paulista, responsável pela parte de Design do projeto QR Security. Tem como objetivo 
            principal passar no vestibular da UNESP e se formar em Designer Gráfico.</p>
          </div>
          <div class="col-md-3 well2">
            <img src="../images/desenvolvedores/Sasa.jpg" alt="Lucas Sartorelli" height="70%" width="70%" style="border-radius: 250px; margin-left: 40px;">
            <br />
            <h3 class="text-center" style="text-shadow: 2px 2px #000;">Lucas Sartorelli</h3>
            <p class="text-justify" style="font-size:17px;text-shadow: 2px 2px #000;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus dolor ac orci rutrum, et gravida urna pretium. Duis sagittis dolor quam, non varius massa consectetur et. Cras sit amet lorem nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras non massa ante. Aliquam tempor elit a dictum facilisis.</p>
          </div>
          <div class="col-md-3 well2">
            <img src="../images/desenvolvedores/Matheus.jpg" alt="Matheus Oliveira" height="70%" width="70%" style="border-radius: 250px; margin-left: 40px;">
            <br />
            <h3 class="text-center" style="text-shadow: 2px 2px #000;">Matheus Oliveira</h3>
            <p class="text-justify" style="font-size:17px; text-shadow: 2px 2px #000;">Nascido na cidade de Conchal-SP, tem 17 anos e está cursando o último
            ano do curso técnico de Informática para a Internet na ETEC Pedro Ferreira Alves, torce para o São Paulo Futebol Clube. Iniciou
            neste ano os estudos em Laravel e procura se aprofundar ainda mais no assunto, com alguns projetos extras, pretende 
            expandir seu conhecimento afim de se preparar melhor para os desafios do Programador Web.</p>
          </div>
          <div class="col-md-3 well2">
            <img src="../images/desenvolvedores/Max.jpg" alt="Maxwell Arruda" height="70%" width="70%" style="border-radius: 250px; margin-left: 40px;">
            <br />
            <h3 class="text-center" style="text-shadow: 2px 2px #000;">Maxwell Arruda</h3>
            <p class="text-justify" style="font-size:17px; text-shadow: 2px 2px #000;">Nascido na cidade de Varginha-MG, tem 17 anos, mudou-se para Mogi Mirim-SP em 2010 e está cursando o último
            ano do curso técnico de Informática para a Internet na ETEC Pedro Ferreira Alves, torce para o São Paulo Futebol Clube. Iniciou
            neste ano os estudos em Laravel, mas ainda está indeciso em qual faculdade fazer. Obs.: Já foi estagiário na escola.
            E pretende expandir seu currículo em outros estágios.</p>
          </div>
@endsection


  
     
