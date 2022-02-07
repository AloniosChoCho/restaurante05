@extends('backend.layouts.app2')

@section('title')
    Usuarios
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Lista de usuarios</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Usuario</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title card-title-with-button mb-4">
                                        <h5 class="text-primary"> <i class="fas fa-search"></i> Filtros de busqueda </h5>
                                        <button class="btn btn-primary" onclick="createUser()"><i class="fas fa-plus"></i> Nuevo</button>
                                    </div>

                                    {{-- <form action="{{ route('users') }}" method="GET" class="row" id="search-users"> --}}
                                        <form action="{{ route('users') }}" method="GET" class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                                                <label for="search-name">
                                                    Nombres
                                                    <i class="fas fa-question-circle"
                                                        title="Presione la tecla ENTER para buscar."
                                                    ></i>
                                                </label>
                                                <input type="text"
                                                    class="form-control placehoder"
                                                    id="search-name"
                                                    name="name"
                                                    value="{{ request('name') }}"
                                                    placeholder="Buscar...">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                                                <label for="search-email">
                                                    Correo electronico
                                                    <i class="fas fa-question-circle"
                                                        title="Presione la tecla ENTER para buscar.">
                                                    </i>
                                                </label>
                                                <input type="text"
                                                    name="email"
                                                    class="form-control placehoder"
                                                    id="search-email"
                                                    value="{{ request('email') }}"
                                                    placeholder="Buscar...">
                                            </div>
                                            <input type="submit" value="Buscar" class="d-none">
                                        </form>

                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Opciones</th>
                                                        <th>Estado</th>
                                                        <th>Nombres</th>
                                                        <th>Correo Electronico</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($listUsers as $user)
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary" title="Editar" onclick="editUser({{$user}})">
                                                                <i class="far fa-edit"></i>
                                                            </button>
                                                            @if ($user->is_active == 1)
                                                                <button class="btn btn-sm btn-success" title="Desactivar" onclick="updateState({{$user}})">
                                                                    <i class="far fa-check-circle"></i>
                                                                </button>
                                                            @else
                                                                <button class="btn btn-sm btn-danger" title="Activar" onclick="updateState({{$user}})">
                                                                    <i class="far fa-times-circle"></i>
                                                                </button>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($user->is_active == 1)
                                                                <span class="badge rounded-pill bg-success badge-custom">Activado</span>
                                                            @else
                                                                <span class="badge rounded-pill bg-danger badge-custom">Desactivado</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $listUsers->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                                class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                Themesbrand.</span>
                        </div>

                    </div>
                </div>
            </footer>
        </div>

        <div class="modal fade" id="modal-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> <span id="title-modal"></span> usuario</h5>
              <button type="button" class="btn-close" aria-label="Cerrar" onclick="closeModal()"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id-user">
                <div class="col-sm-12">
                    <label for="name">Nombres</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="email">Correo electronico</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="repeat-password">Repita su contraseña</label>
                    <input type="password" id="repeat-password" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="closeModal()">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick="sendForm()">Guardar</button>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
    <script>
        const setTitleModal = title => document.getElementById('title-modal').innerHTML = title
        const getValueById = id => document.getElementById(id).value
        const setValueById = (id, value) => document.getElementById(id).value = value

        function openModal() {
            $("#modal-user").modal('show')
        }

        function closeModal() {
            $("#modal-user").modal('hide')
        }

        function createUser() {
            openModal()
            clearForm()
            setTitleModal('Nuevo')
        }

        function editUser(user) {
            openModal()
            setTitleModal('Editar')
            setValueById('id-user',user.id)
            setValueById('name',user.name)
            setValueById('email',user.email)
        }

        function dataToBeSent() {
            return {
                id: Number(getValueById('id-user')),
                name: getValueById('name'),
                email: getValueById('email'),
                password: getValueById('password'),
                repeatassword: getValueById('repeat-password')
            }
        }

        async function sendForm() {
            const form = dataToBeSent()
            console.log(form)
            if(form.id == 0) {
                if(form.password != form.repeatassword) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Alerta',
                        text: 'Las contraseñas no coinciden'
                    })
                    return false;
                }
            }

            try {
                const urlRedirect = form.id > 0 ? 'user-update' : 'user-store'
                const data = await axios.post(urlRedirect, form)
                await Swal.fire({
                    icon: 'success',
                    title: 'Bien',
                    text: 'Proceso exitoso'
                })
                window.location.reload()
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: '¡Oh no!',
                    text: 'Algo salio mal, por favor intente de nuevo. Si persiste el error comuniquese con el desarrollador'
                })
            }
        }

        async function updateState(user) {
            try {
                const data = await axios.post('user-update-state',{
                    id: user.id,
                    is_active: user.is_active
                })
                await Swal.fire({
                    icon: 'success',
                    title: 'Bien',
                    text: 'Proceso exitoso'
                })
                window.location.reload()
            } catch (error) {

            }
        }

        function clearForm() {
            setValueById('id-user',0)
            setValueById('name', '')
            setValueById('email', '')
            setValueById('password', '')
            setValueById('repeat-password', '')
        }

    </script>
@endsection
