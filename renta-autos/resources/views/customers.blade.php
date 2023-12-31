<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
@include('head')
<title>CarRental</title>

<body>
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('aside')
      <div class="layout-page">
        @include('nav')
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Panel de Clientes</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal"
                data-bs-target="#agregarClienteModal"><i class="ti ti-plus"></i></button>
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
                      <th>Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Segundo Apellido</th>
                      <th>Teléfono</th>
                      <th>Correo Electrónico</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->first_name}}</td>
                      <td>{{$item->last_name}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->email}}</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaCliente{{$item->id}}">
                                <i class="menu-icon tf-icons ti ti-file-description"></i>
                                Consultar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarCliente{{$item->id}}">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                              data-bs-target="#eliminarClienteModal{{$item->id}}">
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
  <!------------------------------------------------------Modal de Agregar Cliente--------------------------------------------------->
  <div class="modal fade" id="agregarClienteModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
    aria-labelledby="agregarClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarClienteModalLabel">Agregar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route("customers.create") }}" class="form-inline" enctype=multipart/form-data>
          @csrf
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Primer Apellido</label>
                <div class="col-sm-9">
                  <input type="text" name="first_name" class="form-control" placeholder="Ingrese el primer apellido" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Segundo Apellido</label>
                <div class="col-sm-9">
                  <input type="text" name="last_name" class="form-control" placeholder="Ingrese el segundo apellido" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Teléfono</label>
                <div class="col-sm-9">
                  <input type="tel" name="phone" class="form-control" placeholder="Ingrese el número de teléfono" pattern="[0-9]{10}" title="Ingrese un número de 10 dígitos" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Correo electrónico</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" placeholder="Ingrese el correo electrónico" minlength="3" required/>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="agregarCliente" type="submit" class="btn btn-success">Agregar Cliente</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
   <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
   @foreach($datos as $item)
   <div class="modal fade" id="consultaCliente{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-Usuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consulta-Cliente">Historial de rentas del Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-7 text-left">
                        <p>ID: {{$item->id}}</p>
                        <p>Nombre: {{$item->name}}</p>
                        <p>Primer Apellido: {{$item->first_name}}</p>
                        <p>Segundo Apellido: {{$item->last_name}}</p>
                        <p>Teléfono: {{$item->phone}}</p>
                        <p>Correo electrónico: {{$item->email}}</p>
                        <p>Rentas: Una renta activa.</p>
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
  <div class="modal fade" id="eliminarClienteModal{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="eliminarClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarClienteModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar este Cliente?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{ route("customers.delete", $item->id) }}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
  @foreach($datos as $item)
  <div class="modal fade" id="editarCliente{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editarClienteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarClienteModalLabel">Editar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route("customers.update") }}" class="form-inline" enctype=multipart/form-data>
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
                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="Nombre del usuario"  value="{{$item->name}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Primer Apellido</label>
                <div class="col-sm-9">
                  <input type="text" name="first_name" class="form-control" placeholder="Primer apellido del usuario"  value="{{$item->first_name}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Segundo Apellido</label>
                <div class="col-sm-9">
                  <input type="text" name="last_name" class="form-control" placeholder="Segundo apellido del usuario"  value="{{$item->last_name}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Teléfono</label>
                <div class="col-sm-9">
                  <input type="tel" name="phone"  class="form-control" placeholder="Teléfono del usuario " value="{{$item->phone}}"  pattern="[0-9]{10}" title="Ingrese un número de 10 dígitos" required />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Correo electrónico</label>
                <div class="col-sm-9">
                  <input type="email" name="email"  class="form-control" placeholder="Correo electrónico del usuario" value="{{$item->email}}" minlength="3" required />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="Guardar" type="submit" class="btn btn-success">Guardar</button>
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