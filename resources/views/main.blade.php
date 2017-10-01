<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>

    @include('partials._nav')    

    <div class="container">
      @include('partials._messages')

      @yield('content')

    </div> <!-- end of .container --> 
    <footer class="footer">
      <div class="container">
        <center><span class="text-muted">Copyright © 2017 QR Security - Todos os direitos reservados</span>
        <a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-facebook fa-fw"></i></a>&nbsp;
        <a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-twitter fa-fw"></i></a>&nbsp;
        <a href="https://designersbrasileiros.com.br/sites-para-quem-trabalha-com-design-grafico/"> <i class="fa fa-lg fa-instagram fa-fw"></i></a>&nbsp;
        </center>
      </div>
    </footer>


        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
