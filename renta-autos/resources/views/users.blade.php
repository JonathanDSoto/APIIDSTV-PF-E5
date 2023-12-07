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
                            <span class="text-muted fw-light">Panel de Usuarios</span>
                            <button type="button" class="btn btn-success float-end me-sm-2 me-1" data-bs-toggle="modal" data-bs-target="#agregarUsuarioModal"><i class="ti ti-plus"></i></button>
                        </h4>
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Nombre</th>
                                            <th>Primer Apellido</th>
                                            <th>Segundo Apellido</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datos as $item)
                                        <tr>
                                            <td>#{{$item->id}}</td>
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
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consultaUsuario">
                                                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                                                            Consultar
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editarUsuario">
                                                            <i class="ti ti-pencil me-2"></i> Editar
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#eliminarUsuarioModal">
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
    <!------------------------------------------------------Modal de Agregar Usuario--------------------------------------------------->
    <div class="modal fade" id="agregarUsuarioModal" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="agregarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarUsuarioModalLabel">Agregar Usuario</h5>
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
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Primer Apellido</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Primer Apellido" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="SegundoApellido" class="col-sm-3 col-form-label text-sm-end">SegundoApellido</label>
                                <div class="col-sm-9">
                                    <input name="SegundoApellido" type="text" class="form-control" placeholder="Segundo Apellido" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Telefóno</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Telefóno" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Email</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Contraseña</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="password" class="form-control" placeholder="Contraseña" required />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button id="agregarUsuario" type="submit" class="btn btn-success">Agregar Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------Modal-consulta------------------------------------------------------------->
    <div class="modal fade" id="consultaUsuario" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="consulta-Usuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consulta-Usuario">Detalles del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Imagen 2" width="200" class="mx-auto d-block">
                    <div class="col-7 text-left">
                        <p>Nombre: Juan </p>
                        <p>Primer Apellido: Pérez </p>
                        <p>Segundo Apellido: Gómez </p>
                        <p>Teléfono: 612-188-1964 </p>
                        <p>Email: juan@gmail.com </p>
                        <p type="password">Contraseña : 1234</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------Modal de eliminación------------------------------------------------------>
    <div class="modal fade" id="eliminarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="eliminarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarUsuarioModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que quieres eliminar este Usuario?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------Modal de edición----------------------------------------------------------->
    <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-inline">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label text-sm-end">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Usuario" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">PrimerApellido</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Primer Apellido del Usuario" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">SegundoApellido</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Segundo Apellido del Usuario" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Telefóno</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Telefóno" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Email</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="text" class="form-control" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="modelo" class="col-sm-3 col-form-label text-sm-end">Contraseña</label>
                                <div class="col-sm-9">
                                    <input name="modelo" type="password" class="form-control" placeholder="Contraseña" required />
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