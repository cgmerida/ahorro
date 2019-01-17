<header class="site-header">
  <a href="#" class="brand-main">
    <img src="{{asset('/assets/admin/img/logo-negro.png')}}" id="logo-desk" alt="Laraspace Logo" class="d-none d-md-inline ">
    <img src="{{asset('/assets/admin/img/quetzal-negro.png')}}" id="logo-mobile" alt="Laraspace Logo" class="d-md-none">
  </a>
  <a href="#" class="nav-toggle">
    <div class="hamburger hamburger--htla">
      <span>toggle menu</span>
    </div>
  </a>

    <ul class="action-list">
      <li>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-fa icon-fa-bell"></i></a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown">
          <h6 class="dropdown-header">Notificaciones</h6>
          {{-- <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-user"></i> New User was Registered</a> --}}
          {{-- <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-comment"></i> A Comment has been posted.</a> --}}
        </div>
      </li>
      <li>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img src="{{asset('/assets/admin/img/avatars/avatar.png')}}" alt="Avatar"></a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown">
          <a class="dropdown-item" href="/admin/settings/social"><i class="icon-fa icon-fa-cogs"></i> Configuración</a>
          <a class="dropdown-item" href="/logout"><i class="icon-fa icon-fa-sign-out"></i> Cerrar Session</a>
        </div>
      </li>
    </ul>
</header>
