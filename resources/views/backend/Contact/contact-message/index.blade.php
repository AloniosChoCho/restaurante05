@extends('backend.layouts.app2')

@section('title')
Seccion Mensajes
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Mensaajes</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Mensajes</li>
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
                                    <h5 class="text-primary">Lista De Mensajes</h5>

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
                                              <th class="column-options text-center">Email</th>
                                              <th class="column-options text-center">Telefono</th>
                                              <th>Mensaje</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($message as $message)
                                              <tr>
                                                <td class="column-options">
                                                  <form action="{{ route('contact-message.destroy', ['contact_message' => $message->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                                      <i class="far fa-trash-alt"></i>
                                                    </button>
                                                  </form>
                                                </td>
                                                    <td>{{$message->name}} </td>
                                                    <td>{{$message->email}} </td>
                                                    <td>{{$message->phone}} </td>
                                                    <td>{{$message->message}} </td>
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
