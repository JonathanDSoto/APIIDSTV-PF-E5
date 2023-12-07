<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
@include('head')
<title>CarRental</title>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      @include('aside')
      <div class="layout-page">
        @include('nav')
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Panel de Vehículo</span>
              <button type="button" class="btn btn-success float-end me-sm-1 me-1" data-bs-toggle="modal" data-bs-target="#agregarVehiculoModal">
                <i class="ti ti-plus"></i>
              </button>
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
                      <th>Color</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $item)
                    <tr>
                      <td>#{{$item->id}}</td>
                      <td>{{$item->img}}</td>
                      <td>{{$item->lisense_plate}}</td>
                      <td>{{$item->model}}</td>
                      <td>{{$item->color}}</td>
                      <td>{{$item->aviavle}}</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaVehiculo{{$item->id}}">
                              <i class="menu-icon tf-icons ti ti-file-description"></i>
                              Consultar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarVehiculo{{$item->id}}">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#eliminarVehiculoModal{{$item->id}}">
                              <i class="ti ti-trash me-2"></i> Eliminar
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
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
  @foreach($datos as $item)
 <!-- Modal de Agregar Vehículo -->
 <div class="modal fade" id="agregarVehiculoModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarVehiculoModalLabel">Agregar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline" enctype=multipart/form-data action="{{route('vehicles.create')}}" method="post">
          @csrf
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end" for="imagen">Imagen</label>
                <div class="col-sm-9">
                  <input type="text" name="imagen" class="form-control" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
                <div class="col-sm-9">
                  <input type="text" name="placa" class="form-control" placeholder="Placa del Vehículo" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Modelo</label>
                <div class="col-sm-9">
                  <input name="modelo" type="text" class="form-control" placeholder="Modelo del Vehículo" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="marca" class="col-sm-3 col-form-label text-sm-end">Marca</label>
                <div class="col-sm-9">
                  <input name="marca" type="text" class="form-control" placeholder="Marca del Vehículo" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" placeholder="Color del Vehículo" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="estado" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="estado" class="form-select">
                    <option value="1">Disponible</option>
                    <option value="0">Ocupado</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="agregarVehiculo" type="submit" class="btn btn-success">Agregar Vehículo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @foreach($datos as $item)
  <!-- Modal de Consulta -->
  <div class="modal fade" id="consultaVehiculo{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-vehiculo" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consulta-vehiculo">Detalles del Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('assets/img/vehicles/Civic.png') }}" alt="Imagen 2" width="200" class="mx-auto d-block">
          <div class="col-4 text-left">
            <p>ID:{{$item->id}}</p>
            <p>Placa:{{$item->lisense_plate}}</p>
            <p>Modelo:{{$item->model}}</p>
            <p>Color:{{$item->color}}</p>
            <p>Estado:{{$item->aviavle}}</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @foreach($datos as $item)
  <!-- Modal de Eliminación -->
  <div class="modal fade" id="consultaVehiculo{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-vehiculo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consulta-vehiculo">Detalles del Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('assets/img/vehicles/Civic.png') }}" alt="Imagen 2" width="200" class="mx-auto d-block">
          <div class="col-4 text-left">
            <p>ID:{{$item->id}}</p>
            <p>Placa:{{$item->lisense_plate}}</p>
            <p>Modelo:{{$item->model}}</p>
            <p>Color:{{$item->color}}</p>
            <p>Estado:{{$item->aviavle}}</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @foreach($datos as $item)
  <!-- Modal de Edición -->
  <div class="modal fade" id="editarVehiculo{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarVehiculoModalLabel">Editar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline">
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">ID</label>
                <div class="col-sm-9">
                  <input type="number" name="id" class="form-control" value="{{$item->id}}" readonly />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Placa</label>
                <div class="col-sm-9">
                  <input type="text" name="placa" class="form-control" value="{{$item->lisense_plate}}" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Modelo</label>
                <div class="col-sm-9">
                  <input name="modelo" type="text" class="form-control" value="{{$item->model}}" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" value="{{$item->color}}" />
                </div>
              </div>
              <div class="row mb-3">
                <label for="estado" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="estado" class="form-select">
                    <option value="disponible" {{$item->aviavle == 'disponible' ? 'selected' : ''}}>Disponible</option>
                    <option value="ocupado" {{$item->aviavle == 'ocupado' ? 'selected' : ''}}>Ocupado</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Actualizar Vehículo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @include('scripts')
</body>
</html>