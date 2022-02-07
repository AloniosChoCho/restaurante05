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
                  <form action="{{ url('page-quote-update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$reservation->id}}">
                    <div class="col-sm-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control" name="title" value="{{$reservation->form_title}}">
                      </div>
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control textarea" name="description" row="3">{{$reservation->form_description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" name="phone" value="{{$reservation->contact_phone}}">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">Nombre</label>
                            <select class="form-select cursor-pointer" name="iname">
                              <option value="1" {{ $reservation->show_form_input_name ? 'selected' : '' }}>Mostrar</option>
                              <option value="0 "{{ !$reservation->show_form_input_name ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">Número de telefono</label>
                            <select class="form-select cursor-pointer" name="iphone">
                              <option value="1" {{ $reservation->show_form_input_phone ? 'selected' : '' }}>Mostrar</option>
                              <option value="0" {{ !$reservation->show_form_input_phone ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">Correo Electronico</label>
                            <select class="form-select cursor-pointer" name="iemail">
                              <option value="1" {{ $reservation->show_form_input_email ? 'selected' : '' }}>Mostrar</option>
                              <option value="0" {{ !$reservation->show_form_input_email ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">invitados</label>
                            <select class="form-select cursor-pointer" name="iguest">
                              <option value="1" {{ $reservation->show_form_input_guest ? 'selected' : '' }}>Mostrar</option>
                              <option value="0" {{ !$reservation->show_form_input_guest ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">Fecha</label>
                            <select class="form-select cursor-pointer" name="idata">
                              <option value="1" {{ $reservation->show_form_input_date ? 'selected' : '' }}>Mostrar</option>
                              <option value="0" {{ !$reservation->show_form_input_date ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                            <label for="">Tiempo</label>
                            <select class="form-select cursor-pointer" name="itime">
                              <option value="1" {{ $reservation->show_form_input_time ? 'selected' : '' }}>Mostrar</option>
                              <option value="0" {{ !$reservation->show_form_input_time ? 'selected' : '' }}>Ocultar</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 text-right mt-3">
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
