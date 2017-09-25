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
    <footer class="fixed-bottom">
      <hr>
      <div class="row">
      <p class="text-center">©Copyright QR Security - Todos os direitos reservados

      <div class="figurer">
        <a class="tile3" href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <img class="tile3" src="../images/facepint.png" alt="Facebook" width="25"></img></a>
      </div>
      <div class="figurem">
        <a class="tile3" href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <img class="tile3" src="../images/ttpint.png" alt="Twitter" width="25"></img></a>
      </div>
      <div class="figure">
        <a class="tile3" href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <img class="tile3" src="../images/instapint.png" alt="Instagram" width="25"></img></a>
      </div>
      </div>
    </footer>


        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
