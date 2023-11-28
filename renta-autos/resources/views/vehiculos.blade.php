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
              <span class="text-muted fw-light">Panel de Vehículo</span>
              <button type="button" class="btn btn-success float-end me-sm-1 me-1" data-bs-toggle="modal"
                data-bs-target="#agregarVehiculoModal"><i class="ti ti-plus"></i>Agregar Vehículo</button>
            </h4>
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
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2 "></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i>
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
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2 "></i>
                              Editar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i>
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

   <!------------------------------------------------------Modal de Agregar Vehículo--------------------------------------------------->
   <div class="modal fade" id="agregarVehiculoModal" tabindex="-1" role="dialog"
    aria-labelledby="agregarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarVehiculoModalLabel">Agregar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
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
                  <input type="text" id="vehiculo-categoria" class="form-control"
                    placeholder="Categoria del Vehículo" />
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
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="agregarVehiculo()">Agregar Vehículo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
  <div class="modal fade" id="consultaVehiculo" tabindex="-1" role="dialog" aria-labelledby="consulta-vehiculo"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consulta-vehiculo">Detalles del Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
  <!--------------------------------------------------------Modal de eliminación------------------------------------------------------>
  <div class="modal fade" id="eliminarVehiculoModal" tabindex="-1" role="dialog"
    aria-labelledby="eliminarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarVehiculoModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar este vehículo?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="eliminarVehiculo()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
  <div class="modal fade" id="editarVehiculoModal" tabindex="-1" role="dialog"
    aria-labelledby="editarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarVehiculoModalLabel">Editar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="card-body">
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
            </form>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success" onclick="guardarCambios()">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
  <!----------------------------------------------------------end Modal edicion------------------------------------------------------->
  <script>
    function agregarVehiculo() {
      $('#agregarVehiculoModal').modal('hide');
      $('#mensajeModal').modal('show');
    }
  </script>
  <script>function eliminarVehiculo() {
    $('#elimiehiculoModal').modal('hide');
    $('#mensajeModal').modal('show');
  }
  </script>
  <script>
  function guardarCambios() {
    $('#editarVehiculoModal').modal('hide');
    $('#mensajeModal').modal('show');
  }
  </script>
  @include('scripts')
</body>

</html>