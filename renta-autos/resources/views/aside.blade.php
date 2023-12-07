<!DOCTYPE html>

<head>
</head>

<body>
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
  <a href="{{ route('login') }}" class="app-brand-link">
    <img src="{{asset('assets/img/icons/icono-Car-Rental.png')}}" alt="CarRental" class="app-brand-logo demo">
    <span class="app-brand-text demo menu-text fw-bold"></span>
  </a>

  <a href="{{ route('login') }}" class="layout-menu-toggle menu-link text-large ms-auto">
    <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
    <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
  </a>
</div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
      <!-- Misc -->
      <li class="menu-item">
        <a href="{{ route('users') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-users"></i>
          <div data-i18n="Usuarios">Usuarios</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('customers') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-users"></i>
          <div data-i18n="Clientes">Clientes</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('vehicles') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-car"></i>
          <div data-i18n="Vehículos">Vehículos</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('rentals') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-file-description"></i>
          <div data-i18n="Rentas">Rentas</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('categories') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-folder"></i>
          <div data-i18n="Categorías">Categorías</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('brands') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-tag"></i>
          <div data-i18n="Marcas">Marcas</div>
        </a>
      </li>
    </ul>
  </aside>
</body>

</html>