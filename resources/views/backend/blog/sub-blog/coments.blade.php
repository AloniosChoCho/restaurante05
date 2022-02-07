@extends('backend.layouts.app2')

@section('title')
Seccion Comentarios
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Cometarios</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Comentarios</li>
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
                                    <h5 class="text-primary">Lista Comentarios</h5>

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

                                      <div class="table-responsive">
                                        <table class="table table-sm">
                                          <thead>
                                            <tr>
                                              <th class="column-options text-center">Opciones</th>
                                              <th>Nombre</th>
                                              <th class="column-options text-center">Telefono</th>
                                              <th class="column-options text-center">Email</th>
                                              <th class="column-options text-center">Genero</th>
                                              <th>Comentario</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($listComments as $comment)
                                              <tr>
                                                <td class="column-options">
                                                  <form action="{{ route('blog-comments.update-is-active', ['blog_comment' => $comment->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="state" value="{{ $comment->is_active }}">
                                                    <button type="submit"
                                                      class="btn btn-sm btn-{{ $comment->is_active ? 'success' : 'danger' }}"
                                                      title="{{ $comment->is_active ? 'Desactivar' : 'Activar'}} ">
                                                      <i class="far fa-{{ $comment->is_active ? 'check' : 'times'}}-circle"></i>
                                                    </button>
                                                  </form>
                                                  <form action="{{ route('blog-comments.destroy', ['blog_comment' => $comment->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                                      <i class="far fa-trash-alt"></i>
                                                    </button>
                                                  </form>
                                                </td>
                                                  <td> {{$comment->name}}</td>
                                                  <td> {{$comment->phone}}</td>
                                                  <td> {{$comment->email}}</td>
                                                  <td class="text-center mb-1"> {{$comment->gender ? "Varon" : "Mujer"}}</td>
                                                  <td> {{$comment->comment}}</td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
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
