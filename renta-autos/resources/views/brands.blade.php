<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
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
              <span class="text-muted fw-light">Panel de Marcas</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal" data-bs-target="#agregarMarcaModal"><i class="ti ti-plus"></i>Agregar Marca</button>
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
                      <th>#ID</th>
                      <th>Nombre</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $item)
                    <tr>
                      <td>#{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                          </button>
                          <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaMarca{{$item->id}}">
                              <i class="menu-icon tf-icons ti ti-file-description"></i>
                              Consultar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarMarca{{$item->id}}">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#eliminarMarcaModal{{$item->id}}">
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
  </div>
  <!------------------------------------------------------Modal de Agregar Marca--------------------------------------------------->
  <div class="modal fade" id="agregarMarcaModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarMarcaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarMarcaModalLabel">Agregar Marca</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route("brands.create") }}" class="form-inline" enctype=multipart/form-data>
          @csrf
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre de la marca"  minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras" required />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="agregarMarca" type="submit" class="btn btn-success">Agregar Marca</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
  @foreach($datos as $item)
   <div class="modal fade" id="consultaMarca{{$item->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-Usuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consulta-Marca">Vehículos que pertenecen a la marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-7 text-left">
                        <p>ID: {{$item->id}}</p>
                        <p>Marca: {{$item->name}}</p>
                        <p>Vehículos: No hay vehículos por el momento.</p>
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
  <div class="modal fade" id="eliminarMarcaModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminarMarcaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarMarcaModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar esta Marca?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{ route("brands.delete", $item->id) }}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
  @foreach($datos as $item)
  <div class="modal fade" id="editarMarca{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editarMarcaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarMarcaModalLabel">Editar Marca</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  method="POST" action="{{ route("brands.update") }}" class="form-inline">
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
                  <input type="text" name="name" class="form-control" placeholder="Nombre de la marca" value="{{$item->name}}" minlength="3" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Ingrese solo letras"  required />
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