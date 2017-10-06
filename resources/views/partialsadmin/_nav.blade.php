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
      <a class="navbar-brand" href="#"><img src="{{asset('/images/LogoDefinitivoQR.png')}}" alt="logo" width="50" ></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/admin') ? "active" : "" }}"><a href="/admin">Home</a></li>
        <li class="dropdown">
        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Checagens
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::is('frequencia/create') ? "active" : "" }}"><a href="/frequencia/create"><i class="fa fa-qrcode fa-fw" aria-hidden="true"></i>&nbsp;Checar Entrada</a></li>
          <li class="{{ Request::is('saida/create') ? "active" : "" }}"><a href="/saida/create"><i class="fa fa-qrcode fa-fw" aria-hidden="true"></i>&nbsp;Checar Saída</a></li>
          <li class="{{ Request::is('frequencia/problema') ? "active" : "" }}"><a href="/frequencia/problema"><i class="fa fa-exclamation-circle fa-fw" aria-hidden="true"></i>&nbsp;Problemas</a></li>
        </ul>
        <li class="dropdown">
        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Cadastros
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::is('alunos/create') ? "active" : "" }}"><a href="/alunos/create"><i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>&nbsp;Cadastrar Aluno</a></li>
          <li class="{{ Request::is('register') ? "active" : "" }}"><a href="{{ route('register')}}"><i class="fa fa-btn fa-user fa-fw"></i>&nbsp;Registrar Usuário</a></li>
        </ul>
        <li class="{{ Request::is('alunos') ? "active" : "" }}"><a href="/alunos">Lista de Alunos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">{{ Auth::user()->name }} (Admin)
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height:40px; position:absolute; top:5px; left:5px; border-radius:50%;">
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('frequencia.create') }}">Checar Entrada</a></li>
            <li><a href="{{ route('saida.create') }}">Checar Saída</a></li>
            <li><a href="{{ route('alunos.index') }}">Alunos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('admin/perfil') }}"><i class="fa fa-btn fa-user fa-fw"></i>&nbsp;Perfil</a></li>
            <li>
            <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out fa-fw"></i>&nbsp;Logout
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
        <li class="{{ Request::is('register') ? "active" : "" }}"><a href="{{ route('register')}}">Registrar</a></li>
      </ul>

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>