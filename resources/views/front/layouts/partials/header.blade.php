<header class="site-header">
  <a href="#">
    <img src="{{ asset('/assets/admin/img/logo-negro.png') }}" style="height:40px;" alt="Ahorro GT Logo" class="hidden-sm-down">
  </a>

  <ul class="action-list">
    <li>
      <a href="/login">Iniciar Sesion</a>
    </li>
    <li>
      <a href="/register">Registrarse</a>
    </li>
    @if(Auth::check())
      <li>
        <a href="/admin">Dashboard</a>
      </li>
      <li>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar">
            <img src="{{asset('/assets/admin/img/avatars/avatar.png')}}" alt="Avatar"></a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown">
          <a class="dropdown-item" href="/logout"><i class="icon-fa icon-fa-sign-out"></i> Cerrar Sessión</a>
        </div>
      </li> 
    @endif
  </ul>
</header>