@extends('backend.layouts.app2')

@section('title')
Editar Blog
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Blog</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Blog</li>
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
                                    <h5 class="text-primary">Editar platillo</h5>
                                  </div>
                                  @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                      <ul class="mb-0">
                                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                                      </ul>
                                    </div>
                                  @endif
                                  <form action="{{ route('contact-direct.update', ['contact_direct' => $subContact->id]) }}" class="row" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                      <label for="">Sub titulo Direccion</label>
                                      <input type="text" class="form-control" name="sub_title_direction" id="sub_title_direction" value="{{$subContact->sub_title_direction}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Direccion</label>
                                      <textarea class="form-control textarea" name="direction" id="direction" row="3">{{$subContact->direction}}</textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Sub titulo contactos</label>
                                      <input type="text" class="form-control" name="sub_title_phone" id="sub_title_phone" value="{{$subContact->sub_title_phone}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Telefono personal</label>
                                      <textarea class="form-control textarea" name="personal_phone" id="personal_phone" row="3">{{$subContact->personal_phone}}</textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Telefono empresarial</label>
                                      <input type="text" class="form-control" name="general_phone" id="general_phone" value="{{$subContact->general_phone}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Correo electronico</label>
                                      <textarea class="form-control textarea" name="email" id="email" row="3">{{$subContact->email}}</textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Sub titulo Redes</label>
                                      <input type="text" class="form-control" name="sub_title_social" id="sub_title_social" value="{{$subContact->sub_title_social}}">
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                          <label for="">Facebook</label>
                                          <input type="url" name="facebook" class="form-control placehoder" value="{{$subContact->facebook}}" placeholder="Introduzca Link..." id="link">
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                          <label for="">Twitter</label>
                                          <input type="url" name="twitter" class="form-control placehoder" value="{{$subContact->twitter}}" placeholder="Introduzca Link..." id="link">
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                          <label for="">Google+</label>
                                          <input type="url" name="google" class="form-control placehoder" value="{{$subContact->google}}" placeholder="Introduzca Link..." id="link">
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                          <label for="">Pinterest</label>
                                          <input type="url" name="pinterst" class="form-control placehoder" value="{{$subContact->pinterst}}" placeholder="Introduzca Link..." id="link">
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                          <label for="">Tiktok</label>
                                          <input type="url" name="tiktok" class="form-control placehoder" value="{{$subContact->tiktok}}" placeholder="Introduzca Link..." id="link">
                                          </select>
                                        </div>
                                      </div>
                                    <div class="col-sm-12 mt-3">
                                      <a href="{{ route('contact-direct.index') }}" class="btn btn-sm btn-danger">Cancelar</a>
                                      <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
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
                        </script> © Full Tecnologia <span class="d-none d-sm-inline-block">- Crafted with <i
                                class="mdi mdi-heart text-primary"></i> by
                            Themesbrand.</span>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
