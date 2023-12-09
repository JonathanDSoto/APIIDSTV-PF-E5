<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
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
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal" data-bs-target="#agregarRentaModal"><i class="ti ti-plus"></i></button>
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
                      <th>Nombre del cliente</th>
                      <th>Fecha_inicio</th>
                      <th>Fecha_fin</th>
                      <th>Tarifa</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $item)
                    <tr>
                      <td>#{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->start_date}}</td>
                      <td>{{$item->end_date}}</td>
                      <td>${{$item->rate}}</td>
                      <td>{{$item->aviavle}}</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaRenta{{$item->id}}">
                              <i class="menu-icon tf-icons ti ti-file-description"></i>
                              Consultar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarRenta{{$item->id}}">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#eliminarRentaModal{{$item->id}}">
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
  <!------------------------------------------------------Modal de Agregar Renta--------------------------------------------------->
  <div class="modal fade" id="agregarRentaModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarRentaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarRentaModalLabel">Agregar Renta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('rentals.create')}}" class="form-inline" enctype=multipart/form-data>
          @csrf
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nombre del cliente</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del cliente" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label for="start_date" class="col-sm-3 col-form-label text-sm-end">Fecha Inicial</label>
                <div class="col-sm-9">
                  <input name="start_date" type="text" class="form-control" placeholder="Ingrese la fecha de Inicio" pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida (YYYY-MM-DD)" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="end_date" class="col-sm-3 col-form-label text-sm-end">Fecha Final</label>
                <div class="col-sm-9">
                  <input name="end_date" type="text" class="form-control" placeholder="Ingrese la fecha final" pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida (YYYY-MM-DD)" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label for="rate" class="col-sm-3 col-form-label text-sm-end">Tarifa</label>
                <div class="col-sm-9">
                  <input name="rate" type="number" class="form-control" placeholder="Ingrese la tarifa"  pattern="[0-9]+" title="Ingrese solo números" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label for="aviavle" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                <div class="col-sm-9">
                  <select name="aviavle" class="form-select">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Entregado">Entregado</option>
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
    @foreach($datos as $item)
    <div class="modal fade" id="consultaRenta{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-Usuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consulta-Renta">Detalles de la Renta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-7 text-left">
                        <p>ID: {{$item->id}}</p>
                        <p>Nombre del cliente: {{$item->name}}</p>
                        <p>Fecha de inicio: {{$item->start_date}}</p>
                        <p>Fecha de finalización: {{$item->end_date}}</p>
                        <p>Tarifa: {{$item->rate}}</p>
                        <p>Estado: {{$item->aviavle}}</p>
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
  <div class="modal fade" id="eliminarRentaModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminarRentaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarRentaModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar esta Renta?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{ route("rentals.delete", $item->id)}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
   <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
   @foreach($datos as $item)
    <div class="modal fade" id="editarRenta{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editarRentaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarRentaModalLabel">Editar Renta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route("rentals.update") }}" class="form-inline">
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
                                <label for="name" class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre del usuario" value="{{$item->name}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_date" class="col-sm-3 col-form-label text-sm-end">Fecha Inicio</label>
                                <div class="col-sm-9">
                                    <input name="start_date" type="text" class="form-control" placeholder="Fecha de inicio" value="{{$item->start_date}}"  pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida (YYYY-MM-DD)" required />

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-3 col-form-label text-sm-end">Fecha fin</label>
                                <div class="col-sm-9">
                                    <input name="end_date" type="text" class="form-control" placeholder="Fecha de finalización" value="{{$item->end_date}}"  pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida (YYYY-MM-DD)" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="rate" class="col-sm-3 col-form-label text-sm-end">Tarifa</label>
                                <div class="col-sm-9">
                                    <input name="rate" type="number" class="form-control" placeholder="Tarifa" value="{{$item->rate}}"  pattern="[0-9]+" title="Ingrese solo números" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label for="aviavle" class="col-sm-3 col-form-label text-sm-end">Estado</label>
                              <div class="col-sm-9">
                                <select name="aviavle" class="form-select">
                                  <option value="Pendiente" {{$item->aviavle == 'Pendiente' ? 'selected' : ''}}>Pendiente</option>
                                  <option value="Entregado" {{$item->aviavle == 'Entregado' ? 'selected' : ''}}>Entregado</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
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