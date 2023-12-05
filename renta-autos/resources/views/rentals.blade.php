<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
  @include('head')
<body>
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('aside')
      <div class="layout-page">
        @include('nav')
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Panel de Rentas</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal"
                data-bs-target="#agregarRentaModal"><i class="ti ti-plus"></i></button>
            </h4>
            <div class="card">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Vehiculo</th>
                      <th>Fecha_inicio</th>
                      <th>Fecha_fin</th>
                      <th>Deposito</th>
                      <th>Teléfono</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Juan Pérez</td>
                      <td>Honda Civic</td>
                      <td>2023-01-01</td>
                      <td>2023-01-31</td>
                      <td>$500</td>
                      <td>612-345-6789</td>
                      <td>
                      <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaRenta">
                              <i class="menu-icon tf-icons ti ti-file-description"></i> Consultar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarRenta">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                              data-bs-target="#eliminarRentaModal">
                              <i class="ti ti-trash me-2"></i> Eliminar
                            </a>
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
  <!------------------------------------------------------Modal de Agregar Renta--------------------------------------------------->
  <div class="modal fade" id="agregarRentaModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
    aria-labelledby="agregarRentaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarRentaModalLabel">Agregar Renta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline" enctype=multipart/form-data>
            
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
                <div class="col-sm-9">
                  <input type="text" name="placa" class="form-control" placeholder="Placa del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Modelo</label>
                <div class="col-sm-9">
                  <input name="modelo" type="text" class="form-control" placeholder="Modelo del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="marca" class="col-sm-3 col-form-label text-sm-end">Marca</label>
                <div class="col-sm-9">
                  <input name="marca" type="text" class="form-control" placeholder="Marca del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" placeholder="Color del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="categoria" class="col-sm-3 col-form-label text-sm-end">Categoría</label>
                <div class="col-sm-9">
                  <input name="categoria" type="text" class="form-control" placeholder="Categoría del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="estado" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="estado" class="form-select">
                    <option value="disponible">Disponible</option>
                    <option value="ocupado">Ocupado</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="agregarRenta" type="submit" class="btn btn-success">Agregar Renta</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
  <div class="modal fade" id="consultaRenta" tabindex="-1" role="dialog" data-bs-backdrop="static"
  aria-labelledby="consulta-Renta" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="consulta-Renta">Detalles del Renta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('assets/img/vehicles/Civic.png') }}" alt="Imagen 2" width="200"
          class="mx-auto d-block">
        <div class="col-5 text-left" >
        <th>Nombre: Juan</th>
        <p>Vehiculo: Honda Civic</p>
        <p>Fecha_inicio: 2023-01-01</p>
        <p>Fecha_fin: 2023-01-31</p>
        <p>Deposito: $500 </p>
        <p>Teléfono: 612-345-6789</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <!--------------------------------------------------------Modal de eliminación------------------------------------------------------>
  <div class="modal fade" id="eliminarRentaModal" tabindex="-1" role="dialog"
    aria-labelledby="eliminarRentaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarRentaModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar este Renta?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
  <div class="modal fade" id="editarRenta" tabindex="-1" role="dialog"
    aria-labelledby="editarRentaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarRentaModalLabel">Editar Renta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline">
            
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
                <div class="col-sm-9">
                  <input type="text" name="placa" class="form-control" placeholder="Placa del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Modelo</label>
                <div class="col-sm-9">
                  <input name="modelo" type="text" class="form-control" placeholder="Modelo del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="marca" class="col-sm-3 col-form-label text-sm-end">Marca</label>
                <div class="col-sm-9">
                  <input name="marca" type="text" class="form-control" placeholder="Marca del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="año" class="col-sm-3 col-form-label text-sm-end">Año</label>
                <div class="col-sm-9">
                  <input name="año" type="text" class="form-control" placeholder="Año del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" placeholder="Color del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="categoria" class="col-sm-3 col-form-label text-sm-end">Categoría</label>
                <div class="col-sm-9">
                  <input name="categoria" type="text" class="form-control" placeholder="Categoría del Renta" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="estado" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="estado" class="form-select">
                    <option value="disponible">Disponible</option>
                    <option value="ocupado">Ocupado</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Agregar Renta</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!----------------------------------------------------------end Modal edicion------------------------------------------------------->
  @include('scripts')
</body>

</html>