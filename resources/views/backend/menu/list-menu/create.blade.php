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
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <div class="card-title card-title-with-button mb-4">
                                    <h5 class="text-primary">Nuevo menú</h5>
                                  </div>
                                  @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                      <ul class="mb-0">
                                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                                      </ul>
                                    </div>
                                  @endif
                                  <form action="{{ route('menu-list.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group col-sm-12">
                                      <label for="">Título</label>
                                      <input type="text" name="ltitle" class="form-control" value="{{old('ltitle')}}">
                                    </div>
                                    <div class="form-group col-sm-12">
                                      <label for="">Descripción</label>
                                      <textarea class="form-control textarea" name="ldescription">{{old('ldescription')}}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                      <a href="{{ route('menu-list.index') }}" class="btn btn-sm btn-danger">
                                        Cancelar
                                      </a>
                                      <button type="submit" class="btn btn-sm btn-primary">
                                        Registrar
                                      </button>
                                    </div>
                                  </form>
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
