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
      <div class="container">
        <span class="text-muted">
      <div class="col-md-3 col-md-offset-1 wt">
        <h3 class="ximbinha">QR Security</h3>
        <hr>
        <p class="text-justify">Projeto de conclusão de curso desenvolvido por
        alunos da ETEC Pedro Ferreira Alves no curso de
        Ensino Médio Integrado a Informática para Internet
        durante o ano de 2017</p>
      </div>
      <div class="col-md-3 col-md-offset-1 wt">
        <h3 class="ximbinha">O Grupo</h3>
        <hr>
          <ul>
            <li><a href="https://www.facebook.com/gia.Caio">Caio Gianotto de Melo</a></li>
            <li><a href="https://www.facebook.com/guilherme.lombardi.75">Guilherme Oliveira Lombardi</a></li>
            <li><a href="https://www.facebook.com/lucas.manera.9">Lucas Eduardo Manera</a></li>
            <li><a href="https://www.facebook.com/lucas.sartorelli.71">Lucas Sartorelli Leinatti</a></li>
            <li><a href="https://www.facebook.com/matheus.oliveira1992">Matheus Luiz de Oliveira</a></li>
            <li><a href="https://www.facebook.com/maxarrudaa">Maxwell Arruda</a></li>
            <li><a href="https://www.facebook.com/wilgner.delfino">Wilgner Ferreira Delfino</a></li>
          </ul>        
      </div>
      <div class="col-md-3 col-md-offset-1 wt">
        <h3 class="ximbinha">Visite-nos</h3>
        <hr>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-facebook fa-fw"></i></a>&nbsp;facebook.com/qrsecurity</p>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-twitter fa-fw"></i></a>&nbsp;twitter.com/qrsecurity</p>
        <p><a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-instagram fa-fw"></i></a>&nbsp;instagram.com/qrsecurity</p>
      </div>
        </span>
      </div>
    </footer>


        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
