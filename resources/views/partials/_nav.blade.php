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
      <a class="navbar-brand" href="/"><img src="../images/logodefinitivoQR.png" alt="logo" width="50" ></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('home') ? "active" : "" }}"><a href="/home">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        
        <li class="dropdown" id="marcarlida" onclick="marcarlida()">
          <a id="not" href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative">
          <i class="fa fa-fw fa-globe"></i>&nbsp;Notificações
          <span id="count" class="badge">{{count(Auth::user()->unreadNotifications)}}</span></a>
          <ul class="dropdown-menu" role="menu">
            <li>
              @forelse(Auth::user()->unreadNotifications as $notification)
                @include('partials.notification.'.snake_case(class_basename($notification->type)))
              @empty
                <a href="">Sem Notificações</a>
              @endforelse
            </li>    
          </ul>
        </li>
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">{{ Auth::user()->name }}
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height:40px; position:absolute; top:5px; left:5px; border-radius:50%;">
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/perfil') }}"><i class="fa fa-btn fa-user"></i>  Perfil</a></li>
            <li>
            <a href="{{ route('user.logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                 Logout
            </a>
            <form id="logout-form" action="{{ route('user.logout') }}" method="get" style="display: none;">
            {{ csrf_field() }}
            </form>
            </li> 
            </ul>
        </li>
        
        @else
        
        <ul class="nav navbar-nav">
        <li class="{{ Request::is('login') ? "active" : "" }}"><a href="{{ route('login')}}">Login</a></li>
        <li class="{{ Request::is('admin.login') ? "active" : "" }}"><a href="{{ route('admin.login')}}"> Login Admin</a></li>
      </ul>

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>