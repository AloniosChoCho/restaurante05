@extends('backend.layouts.app2')

@section('title')
  Platillos
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Carta de platillos</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Carta</li>
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
                            <h4 class="text-primary mb-0"> CARTA {{$menu->title_list}} </h4>
                            <a href="{{ route('menu-list.index') }}" class="btn btn-sm btn-danger">Atrás <i class="fas fa-undo"></i></a>
                          </div>
                          <p class="mb-0"> {{$menu->description_list}} </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-title card-title-with-button mb-4">
                                  <h5 class="text-primary">Lista de platos</h5>
                                  <a class="btn btn-primary"
                                    href="{{ route('sub-menu-list.create', ['idMenuList' => $menu->id]) }}"><i class="fas fa-plus"></i> Nuevo</a>
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

                              @if (!count($platos))
                                <div class="col-12 text-center user-select-none">
                                  <img src="{{ asset('backend/images/lista-vacia.png') }}" height="90" alt="Lista vacía">
                                  <h6 class="text-primary font-weight-bold mt-2">Lista de platos vacía</h6>
                                </div>
                              @else
                                <div class="table-responsive">
                                  <table class="table table-sm">
                                    <thead>
                                      <tr>
                                        <th class="column-options text-center">Opciones</th>
                                        <th>Nombre</th>
                                        <th>Burbuja</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($platos as $plato)
                                        <tr>
                                          <td class="column-options">
                                            <a href="{{route('sub-menu-list.edit', ['sub_menu_list' => $plato->id, 'idMenuList' => $menu->id]) }}"
                                              class="btn btn-sm btn-primary" title="Editar">
                                              <i class="far fa-edit"></i>
                                            </a>
                                            <form action="{{ route('sub-menu-list.update-is-active', [ 'sub_menu_list' => $plato->id ] ) }}" method="post" style="display: inline-block;">
                                              @csrf
                                              <input type="hidden" name="state" value="{{$plato->is_active}}">
                                              <input type="hidden" name="idMenuList" value="{{$menu->id}}">
                                              <button type="submit"
                                                class="btn btn-sm btn-{{ $plato->is_active ? 'success' : 'danger'}}"
                                                title="{{ $plato->is_active ? 'Desactivar' : 'Activar'}} ">
                                                <i class="far fa-{{ $plato->is_active ? 'check' : 'times'}}-circle"></i>
                                              </button>
                                            </form>
                                          </td>
                                          <td> {{ $plato->name }} </td>
                                          <td> {{ $plato->alert_message }} </td>
                                          <td> {{ $plato->description }} </td>
                                          <td> <strong>S/ {{ number_format($plato->price,2) }}</strong> </td>
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
