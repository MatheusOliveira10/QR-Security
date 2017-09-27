<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body onload="fetchBookmarks()">

    @include('partials._nav')    

    <div class="container">
      @include('partials._messages')

      @yield('content')

    </div> <!-- end of .container --> 
    <footer class="footer">
      <hr>
      <div class="col-md-3 col-md-offset-1">
        <h3>QR Security</h3>
        <p class="text-justify">Projeto de conclusão de curso desenvolvido por
        alunos da ETEC Pedro Ferreira Alves no curso de
        Ensino Médio Integrado a Informática para Internet
        durante o ano de 2017</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h3>O Grupo:</h3>
          <ul>
            <li>Caio Gianotto de Melo</li>
            <li>Guilherme Oliveira Lombardi</li>
            <li>Lucas Eduardo Manera</li>
            <li>Lucas Sartorelli Leinatti</li>
            <li>Matheus Luiz de Oliveira</li>
            <li>Maxwell Arruda</li>
            <li>Wilgner Ferreira Delfino</li>
          </ul>        
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h3>Visite-nos</h3>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-facebook fa-fw"></i></a>&nbsp;facebook.com/qrsecurity</p>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-twitter fa-fw"></i></a>&nbsp;twitter.com/qrsecurity</p>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-instagram fa-fw"></i></a>&nbsp;instagram.com/qrsecurity</p>
      </div>
    </footer>


        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
