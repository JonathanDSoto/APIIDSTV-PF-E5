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
            @if (session("correcto"))
            <div class="alert alert-success">{{session("correcto")}}</div>
            @endif

            @if (session("incorrecto"))
            <div class="alert alert-danger">{{session("incorrecto")}}</div>
            @endif
            <div class="card">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Placa</th>
                      <th>Marca</th>
                      <th>Color</th>
                      <th>Categoria</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $item)
                    <tr>
                      <td>#{{$item->id}}</td>
                      <td>{{$item->lisense_plate}}</td>
                      <td>{{$item->brand}}</td>
                      <td>{{$item->color}}</td>
                      <td>{{$item->category}}</td>
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
  <!-- Modal de Agregar Vehículo -->
  <div class="modal fade" id="agregarVehiculoModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarVehiculoModalLabel">Agregar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route("vehicles.create") }}" class="form-inline" enctype=multipart/form-data>
            @csrf
            <div class="card-body">
              <div class="row mb-3">
                <label for="lisense_plate" class="col-sm-3 col-form-label text-sm-end">Placa</label>
                <div class="col-sm-9">
                  <input type="text" name="lisense_plate" class="form-control" placeholder="Placa del Vehículo" minlength="6" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="brand" class="col-sm-3 col-form-label text-sm-end">Marca</label>
                <div class="col-sm-9">
                  <input name="brand" type="text" class="form-control" placeholder="Marca del Vehículo" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="category" class="col-sm-3 col-form-label text-sm-end">Categoria</label>
                <div class="col-sm-9">
                  <input name="category" type="text" class="form-control" placeholder="Categoria del Vehículo" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" placeholder="Color del Vehículo" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="aviavle" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="aviavle" class="form-select">
                    <option value="Disponible">Disponible</option>
                    <option value="Ocupado">Ocupado</option>
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
  <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
  @foreach($datos as $item)
  <div class="modal fade" id="consultaVehiculo{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-Usuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consulta-Vehiculo">Historial de rentas y tarifas del vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-7 text-left">
            <p>ID: {{$item->id}}</p>
            <p>Placa: {{$item->lisense_plate}}</p>
            <p>Marca: {{$item->brand}}</p>
            <p>Color: {{$item->color}}</p>
            <p>Categoría: {{$item->category}}</p>
            <p>Estado: {{$item->aviavle}}</p>
            <p>Historial de rentas: No hay rentas por el momento.</p>
            <p>Tarifas: <br>
              $2,500 por día. <br>
              $10,000 por semana. <br>
              $30,000 por mes.
            </p>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!--------------------------------------------------------Modal de eliminación------------------------------------------------------>
  @foreach($datos as $item)
  <div class="modal fade" id="eliminarVehiculoModal{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="eliminarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarVehiculoModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar este Vehiculo?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{ route("vehicles.delete", $item->id) }}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Modal de Edición -->
  @foreach($datos as $item)
  <div class="modal fade" id="editarVehiculo{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editarVehiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarVehiculoModalLabel">Editar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route("vehicles.update") }}" class="form-inline">
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
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
                  <input type="text" name="lisense_plate" class="form-control" value="{{$item->lisense_plate}}" minlength="6" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="brand" class="col-sm-3 col-form-label text-sm-end">Marca</label>
                <div class="col-sm-9">
                  <input name="brand" type="text" class="form-control" value="{{$item->brand}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label for="category" class="col-sm-3 col-form-label text-sm-end">Categoria</label>
                <div class="col-sm-9">
                  <input name="category" type="text" class="form-control" value="{{$item->category}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="color" class="col-sm-3 col-form-label text-sm-end">Color</label>
                <div class="col-sm-9">
                  <input name="color" type="text" class="form-control" value="{{$item->color}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="aviavle" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="aviavle" class="form-select">
                    <option value="Disponible" {{$item->aviavle == 'disponible' ? 'selected' : ''}}>Disponible</option>
                    <option value="Ocupado" {{$item->aviavle == 'ocupado' ? 'selected' : ''}}>Ocupado</option>
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