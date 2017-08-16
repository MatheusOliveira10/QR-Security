<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">QR Security</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
        <li class="{{ Request::is('frequencia') ? "active" : "" }}"><a href="/frequencia">Frequência do Aluno</a></li>
        <li class="{{ Request::is('dias') ? "active" : "" }}"><a href="/dias">Dias Letivos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Olá Sr.(a) {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('frequencia.index') }}">Frequência do Aluno</a></li>
            <li><a href="{{ route('dias.index') }}">Dias Letivos</a></li>
            <li role="separator" class="divider"></li>
            <li>
            <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
            </li> 
            </ul>
        </li>
        
        @else
        
        <ul class="nav navbar-nav">
        <li class="{{ Request::is('login') ? "active" : "" }}"><a href="{{ route('login')}}">Login</a></li>
        <li class="{{ Request::is('admin.login') ? "active" : "" }}"><a href="{{ route('admin.login')}}"> Login Admin</a></li>
        <li class="{{ Request::is('register') ? "active" : "" }}"><a href="{{ route('register')}}">Registrar</a></li>
      </ul>

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>