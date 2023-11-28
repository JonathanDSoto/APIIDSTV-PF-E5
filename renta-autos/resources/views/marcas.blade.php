<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
  @include('head');
<body>
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('aside');
      <div class="layout-page">
        @include('nav');
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Panel de Marcas</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal"
                data-bs-target="#agregarMarca"><i class="ti ti-plus"></i>Agregar Marca</button>
            </h4>
            <div class="card">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Honda</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Toyota</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Ford</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                class="menu-icon tf-icons ti ti-file-description"></i> Consultar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2"></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i>
                              Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>


  <div class="layout-overlay layout-menu-toggle"></div>
  <div class="drag-target"></div>
  </div>

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