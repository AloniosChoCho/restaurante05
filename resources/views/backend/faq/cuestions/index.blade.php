@extends('backend.layouts.app2')

@section('title')
  Preguntas
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Menu de Preguntas</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Preguntas</li>
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
                                        <h5 class="text-primary">Lista de Preguntas</h5>
                                        <a class="btn btn-primary" href="{{ route('faq-cuestions.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
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

                                    {{-- contador de mi lista --}}
                                    @if (!count($faq))
                                      <div class="col-12 text-center user-select-none">
                                        <img src="{{ asset('backend/images/lista-vacia.png') }}" height="90" alt="Lista vacía">
                                        <h6 class="text-primary font-weight-bold mt-2">No existe ninguna pregunta</h6>
                                      </div>
                                    @else
                                      <div class="table-responsive">
                                        <table class="table table-sm">
                                          <thead>
                                            <tr>
                                              <th style="inline-size: 120px;" class=" text-center">Opciones</th>
                                              <th>Pregunta</th>
                                              <th>Respuesta</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($faq as $faq)
                                              <tr>
                                                <td style="inline-size: 120px;" class="text-center">
                                                  <a href="{{route('faq-cuestions.edit', ['faq_cuestion' => $faq->id]) }}" class="btn btn-sm btn-primary" title="Editar">
                                                    <i class="far fa-edit"></i>
                                                  </a>

                                                  <a href="javascript:;"
                                                    onclick="document.getElementById('form-update-state{{$faq->id}}').submit()"
                                                    class="btn btn-sm btn-{{ $faq->is_active ? 'success' : 'danger'}}"
                                                    title="{{ $faq->is_active ? 'Desactivar' : 'Activar'}} ">
                                                    <i class="far fa-{{ $faq->is_active ? 'check' : 'times'}}-circle"></i>
                                                  </a>
                                                  <form id="form-update-state{{$faq->id}}" action="{{ route('faq-cuestions.update-is-active', ['faq_cuestion'=> $faq->id ]) }}" method="post" class="d-none">
                                                    @csrf
                                                    <input type="hidden" name="state" value="{{$faq->is_active}}">
                                                    <input type="hidden" name="idFaq" value="{{$faq->id}}">
                                                  </form>
                                                  <form action="{{ route('faq-cuestions.destroy', ['faq_cuestion' => $faq->id]) }}" method="POST" class="d-inline">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                                    <i class="far fa-trash-alt"></i>
                                                  </button>
                                                </form>
                                                </td>
                                                <td> {{ $faq->questions }} </td>
                                                <td> {{ $faq->answers }} </td>
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
