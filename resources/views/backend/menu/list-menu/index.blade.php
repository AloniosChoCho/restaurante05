@extends('backend.layouts.app2')

@section('title')
  Menu Lista
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Menu de Lista</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Menu</li>
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
                                        <h5 class="text-primary">Lista de menú</h5>
                                        <a class="btn btn-primary" href="{{ route('menu-list.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
                                    </div>
                                    @if(session('created'))
                                      <div class="alert alert-success">
                                        {{ session('created') }}
                                      </div>
                                    @endif

                                    @if(session('updated'))
                                      <div class="alert alert-success">
                                        {{ session('updated') }}
                                      </div>
                                    @endif

                                    @if (!count($menuList)) {{-- contador de mi lista --}}
                                      <div class="col-12 text-center user-select-none">
                                        <img src="{{ asset('backend/images/lista-vacia.png') }}" height="90" alt="Lista vacía">
                                        <h6 class="text-primary font-weight-bold mt-2">Lista de menús vacía</h6>
                                      </div>
                                    @else
                                      <div class="table-responsive">
                                        <table class="table table-sm">
                                          <thead>
                                            <tr>
                                              <th class="column-options text-center">Opciones</th>
                                              <th class="column-options text-center">Lista</th>
                                              <th>Titulo</th>
                                              <th>Descripción</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($menuList as $menu)
                                              <tr>
                                                <td class="column-options">
                                                  <a href="{{route('menu-list.edit', ['menu_list' => $menu->id]) }}" class="btn btn-sm btn-primary" title="Editar">
                                                    <i class="far fa-edit"></i>
                                                  </a>

                                                  <a href="javascript:;"
                                                      onclick="document.getElementById('form-update-state{{$menu->id}}').submit()"
                                                      class="btn btn-sm btn-{{ $menu->is_active ? 'success' : 'danger'}}"
                                                      title="{{ $menu->is_active ? 'Desactivar' : 'Activar'}} ">
                                                      <i class="far fa-{{ $menu->is_active ? 'check' : 'times'}}-circle"></i>
                                                  </a>
                                                  <form id="form-update-state{{$menu->id}}" action="{{ route('menu-list.update-is-active', ['menu_list'=> $menu->id ]) }}" method="post" class="d-none">
                                                    @csrf
                                                    <input type="hidden" name="state" value="{{$menu->is_active}}">
                                                    <input type="hidden" name="idMenuList" value="{{$menu->id}}">
                                                  </form>
                                                </td>

                                                <td class="column-options">
                                                  <a href="{{ route('sub-menu-list.index', [ 'idMenuList' => $menu->id] ) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-utensils"></i> Platillos ({{count($menu->platillos)}})
                                                  </a>
                                                </td>

                                                <td> {{ $menu->title_list }} </td>
                                                <td> {{ $menu->description_list }} </td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    @endif
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
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i
                                class="mdi mdi-heart text-primary"></i> by
                            Themesbrand.</span>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
