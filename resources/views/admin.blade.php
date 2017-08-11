<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partialsadmin._head')
  </head>
  
  <body>

    @include('partialsadmin._nav')    

    <div class="container">
      @include('partialsadmin._messages')

      @yield('content')

      @include('partialsadmin._footer')

    </div> <!-- end of .container --> 

        @include('partialsadmin._javascript')

        @yield('scripts')

  </body>
</html>
