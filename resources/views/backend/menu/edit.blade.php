@extends('backend.layouts.app2')

@section('title')
  Reservación
@endsection

@section('content')
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title">
                        <h4 class="mb-0 font-size-18">Reservación</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                            <li class="breadcrumb-item active">Reservación</li>
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
                    <h5 class="text-primary"> Reservación</h5>
                  </div>
                  <form action="{{ url('page-menu-update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$menu->id}}">
                    <div class="col-sm-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control" name="mtitle" value="{{$menu->header_title ?? ''}}">
                      </div>
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control textarea" name="mdescription" row="3">{{$menu->header_description ?? ''}}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 text-right mb-3">
                      <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Actualizar</button>
                    </div>
                  </form>
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
              <script>document.write(new Date().getFullYear())</script>
              © Agroxa <span class="d-none d-sm-inline-block">- Crafted with
              <i class="mdi mdi-heart text-primary"></i> by .</span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
