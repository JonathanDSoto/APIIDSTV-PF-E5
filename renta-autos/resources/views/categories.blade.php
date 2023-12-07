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
              <span class="text-muted fw-light">Panel de Categorias</span>
              <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal" data-bs-target="#agregarCategoriaModal"><i class="ti ti-plus"></i></button>
            </h4>
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
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarCategoria">
                              <i class="ti ti-pencil me-2"></i> Editar
                            </a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#eliminarCategoriaModal">
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
  <!------------------------------------------------------Modal de Agregar Categoria--------------------------------------------------->
  <div class="modal fade" id="agregarCategoriaModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarCategoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarCategoriaModalLabel">Agregar Categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline" enctype=multipart/form-data>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button id="agregarCategoria" type="submit" class="btn btn-success">Agregar Categoria</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------------------------Modal de eliminación------------------------------------------------------>
  <div class="modal fade" id="eliminarCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="eliminarCategoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarCategoriaModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que quieres eliminar esta Categoria?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
  <div class="modal fade" id="editarCategoria" tabindex="-1" role="dialog" aria-labelledby="editarCategoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarCategoriaModalLabel">Editar Categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-inline">
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Categoria" required />
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
  @include('scripts')
</body>

</html>