<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Tables</title>


  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/vendor/js/template-customizer.js"></script>
  <script src="assets/js/config.js"></script>

</head>

<body>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


        <div class="app-brand demo ">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                  fill="#7367F0" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                  fill="#7367F0" />
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">CarRental</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <!-- Misc -->
          <li class="menu-item">
            <a href="clientes.blade.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-users"></i>
              <div data-i18n="Clientes">Clientes</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="vehiculos.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-car"></i>
              <div data-i18n="Vehículos">Vehículos</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="rentas.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-file-description"></i>
              <div data-i18n="Rentas">Rentas</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="categorias.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-folder"></i>
              <div data-i18n="Categorías">Categorías</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="marcas.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-tag"></i>
              <div data-i18n="Marcas">Marcas</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-sm"></i>
            </a>
          </div>


          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                  <i class="ti ti-search ti-md me-2"></i>
                  <span class="d-none d-md-inline-block text-muted">Search</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class='ti ti-md'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                      <span class="align-middle"><i class='ti ti-sun me-2'></i>Light</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                      <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">RicardoYo</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                      <i class="ti ti-logout me-2 ti-sm"></i>
                      <span class="align-middle">Cerrar sesión</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>


          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
              aria-label="Search...">
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </nav>

        <!-- / Navbar -->



        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Panel de Vehículo</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal"
                data-bs-target="#agregarVehiculo"><i class="ti ti-plus"></i>Agregar Vehículo</button>
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Imagen</th>
                      <th>Placa</th>
                      <th>Modelo</th>
                      <th>Marca</th>
                      <th>Categoria</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><img src="imagen1.jpg" alt="Imagen 1" width="50"></td>
                      <td>ABC123</td>
                      <td>Civic</td>
                      <td>Honda</td>
                      <td>Sedán</td>
                      <td><span class="badge bg-label-danger me-1">Ocupado</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description" data-bs-toggle="modal"
                                data-bs-target="#consultaVehiculo"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2 "
                                data-bs-toggle="modal" data-bs-target="#editarVehiculoModal"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"
                                data-bs-toggle="modal" data-bs-target="#eliminarVehiculoModal"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><img src="imagen2.jpg" alt="Imagen 2" width="50"></td>
                      <td>XYZ789</td>
                      <td>Accord</td>
                      <td>Honda</td>
                      <td>Sedán</td>
                      <td><span class="badge bg-label-success me-1">Disponible</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description" data-bs-toggle="modal"
                                data-bs-target="#consultaVehiculo"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2 "
                                data-bs-toggle="modal" data-bs-target="#editarVehiculoModal"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"
                                data-bs-toggle="modal" data-bs-target="#eliminarVehiculoModal"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><img src="imagen3.jpg" alt="Imagen 3" width="50"></td>
                      <td>123ABC</td>
                      <td>Camry</td>
                      <td>Toyota</td>
                      <td>Sedán</td>
                      <td><span class="badge bg-label-danger me-1">Ocupado</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description" data-bs-toggle="modal"
                                data-bs-target="#consultaVehiculo"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2 "
                                data-bs-toggle="modal" data-bs-target="#editarVehiculoModal"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"
                                data-bs-toggle="modal" data-bs-target="#eliminarVehiculoModal"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>

  <!-- Modal-Register -->
  <div class="modal fade" id="agregarVehiculo" tabindex="-1" role="dialog" aria-labelledby="form-vehiculo"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-vehiculo">Agregar Vehiculo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Imagen</label>
              <div class="col-sm-9">
                <input type="file" id="vehiculo-imagen" class="form-control" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-placa" class="form-control" placeholder="Placa del Vehículo" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Modelo</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-modelo" class="form-control" placeholder="Modelo del Vehículo" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Marca</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-modelo" class="form-control" placeholder="Marca del Vehículo" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Categoria</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-categoria" class="form-control" placeholder="Categoria del Vehículo" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Estado</label>
              <div class="col-sm-9">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label" for="vehiculo-estado-disponible">Disponible</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success">Agregar Vehiculo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Modal-consulta -->
  <div class="modal fade" id="consultaVehiculo" tabindex="-1" role="dialog" aria-labelledby="consulta-vehiculo"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consulta-vehiculo">Detalles del Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Contenido del modal con los datos de la tabla -->
          <img src="imagen2.jpg" alt="Imagen 2" width="50">
          <p>Placa: XYZ789</p>
          <p>Modelo: Accord</p>
          <p>Marca: Honda</p>
          <p>Tipo: Sedán</p>
          <p>Descripción: Descripcion</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal de eliminación -->
  <div class="modal fade" id="eliminarVehiculoModal" tabindex="-1" role="dialog" aria-labelledby="eliminarVehiculoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarVehiculoLabel">Eliminar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que deseas eliminar este vehículo?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <!-- Botón para confirmar la eliminación -->
          <button type="button" class="btn btn-danger" onclick="mostrarMensaje()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de mensaje de eliminación exitosa -->
  <div class="modal fade" id="mensajeEliminacionModal" tabindex="-1" role="dialog"
    aria-labelledby="mensajeEliminacionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mensajeEliminacionLabel">Vehículo Eliminado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>El vehículo se ha eliminado exitosamente.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
  <div class="drag-target"></div>
  </div>
  <!-- Modal de edición -->
  <div class="modal fade" id="editarVehiculoModal" tabindex="-1" role="dialog" aria-labelledby="form-vehiculo"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-vehiculo">Editar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Imagen</label>
              <div class="col-sm-9">
                <input type="file" id="vehiculo-imagen" class="form-control" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-placa" class="form-control" placeholder="Placa del Vehículo"
                  value="XYZ789" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Modelo</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-modelo" class="form-control" placeholder="Modelo del Vehículo"
                  value="Accord" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Marca</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-marca" class="form-control" placeholder="Marca del Vehículo"
                  value="Honda" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Categoría</label>
              <div class="col-sm-9">
                <input type="text" id="vehiculo-categoria" class="form-control" placeholder="Categoría del Vehículo"
                  value="Sedán" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-sm-end">Estado</label>
              <div class="col-sm-9">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="vehiculo-estado-disponible" checked>
                  <label class="form-check-label" for="vehiculo-estado-disponible">Disponible</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="guardarCambios()">Guardar Cambios</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function mostrarMensaje() {
      $('#eliminarVehiculoModal').modal('hide');
      $('#mensajeEliminacionModal').modal('show');
    }
  </script>
  <script>
    function guardarCambios() {
      $('#editarVehiculoModal').modal('hide');
    }
  </script>
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>