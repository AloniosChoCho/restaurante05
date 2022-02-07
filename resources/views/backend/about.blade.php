@extends('backend.layouts.app2')

@section('styles')
    <style>
        .section-title-description {
            max-block-size: 118px;
            block-size: 118px;
        }
        .size-sugerence {
            padding-block: 1em;
            display: inline-block;
            font-weight: bold;
        }
    </style>
@endsection

@section('title')
    Acerca de
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Acerca de</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Acerca de</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content-wrapper">
                  <form class="row" method="POST" action="{{ route('update-page-about') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-12 text-center mb-4">
                              <h2>Sección Título</h2>
                            </div>
                            <div class="col-sm-12 pb-3">
                              <div class="row">
                                <div class="col-sm-12 col-md-5">
                                  <label for="title">Titulo</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="section_title_title"
                                    id="title"
                                    value="{{ $data->section_title_title ?? '' }}">
                                  <label for="description">Descripcion</label>
                                  <textarea
                                    name="section_title_description"
                                    class="form-control section-title-description"
                                    id="description"
                                    rows="3">{{ $data->section_title_description ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                  <div class="file_container">
                                    <input type="file" class="file_input" name="section_title_image" id="file_input" accept="image/*">
                                      @if (isset($data->section_title_image))
                                        <img id="file_image" src="{{ asset('storage/about/'.$data->section_title_image ?? '') }}" class="file_image">
                                      @else
                                        <img id="file_image" src="" class="file_image">
                                      @endif
                                    <small class="file_letter">Subir Imagen</small>
                                  </div>
                                </div>
                                <div class="col-sm-12 text-right">
                                  <small class="size-sugerence">Imagen de 1920 x 700</small>
                                </div>
                              </div>

                              <hr>
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <h2 class="text-center">
                                        Sección Historia
                                        <a href="{{ route('add-history') }}" style="float: right;" class="btn btn-sm btn-primary"> ({{$quantityHistories}}) Agregar historia</a>
                                      </h2>
                                      <label for="title">Titulo</label>
                                      <input type="text" class="form-control"
                                        name="section_history_title"
                                        id="title"
                                        value="{{ $data->section_history_title ?? '' }}">
                                      <label for="description">Descripcion</label>
                                      <textarea name="section_history_description" class="form-control section-history-description" id="description" rows="3">{{ $data->section_history_description  ?? '' }}</textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <h2 class="text-center">Sección Servicios</h2>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <label for="title">Titulo</label>
                                      <input
                                        type="text"
                                        class="form-control"
                                        name="section_service_title"
                                        id="title"
                                        value="{{ $data->section_service_title  ?? '' }}">
                                      <label for="description">Descripcion</label>
                                      <textarea
                                        name="section_service_description"
                                        class="form-control section-service-description"
                                        id="description"
                                        rows="3">{{ $data->section_service_description ?? ''}}</textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <h2>Sección Certificados</h2>
                            </div>
                            <hr>
                            <div class="col-sm-12">
                              <div class="col-sm-12 col-md-5">
                                <label for="title">Titulo</label>
                                <input type="text"
                                  class="form-control"
                                  name="section_certificates_title"
                                  id="title"
                                  value="{{ $data->section_certificates_title ?? '' }}">
                                <label for="description">Descripcion</label>
                                <textarea
                                    name="section_certificates_description"
                                    class="form-control section-certificates-description"
                                    id="description"
                                    rows="3">{{ $data->section_certificates_description ?? '' }}
                                </textarea>
                                <div class="col-sm-12 mb-2">
                                  <label for="section_certificates_link">Link</label>
                                  <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{ $data->section_certificates_link }}" placeholder="Introduzca Link..." id="link">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © Full Tecnologia <span
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
        const fileInput = document.querySelector('#file_input');
        const fileImage = document.querySelector('#file_image');

        fileInput.addEventListener('change', function (e) {
        const file = e.target.files[0]

        const reader = new FileReader(file)
        reader.onload = (e) => fileImage.src = reader.result
        reader.readAsDataURL(file)
        })
    </script>
@endsection
