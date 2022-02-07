@extends('backend.layouts.app2')

@section('title')
  Contactenos
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <div class="page-title">
                              <h4 class="mb-0 font-size-18">Contactenos</h4>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                  <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                  <li class="breadcrumb-item active">Contactenos</li>
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
                          <h5 class="text-primary"> Contactenos </h5>
                        </div>
                        @if(session('success'))
                          <div class="alert alert-success">
                            {{ session('success') }}
                          </div>
                        @endif
                         <div class="col-sm-12 col-md-12 mb-3">
                          <div class="form-group">
                            <label for="">Sub titulo Direccion</label>
                            <input type="text" class="form-control" value="{{$subContact->sub_title_direction}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="">Direccion</label>
                            <textarea class="form-control textarea" readonly row="3">{{$subContact->direction}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Sub titulo contactos</label>
                            <input type="text" class="form-control" value="{{$subContact->sub_title_phone}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="">Telefono personal</label>
                            <textarea class="form-control textarea" readonly row="3">{{$subContact->personal_phone}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Telefono empresarial</label>
                            <input type="text" class="form-control" value="{{$subContact->general_phone}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="">Correo electronico</label>
                            <textarea class="form-control textarea" readonly row="3">{{$subContact->email}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Sub titulo Redes</label>
                            <input type="text" class="form-control" value="{{$subContact->sub_title_social}}" readonly>
                          </div>

                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                              <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{$subContact->facebook}}" readonly>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="form-group">
                                <label for="">Twitter</label>
                                <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{$subContact->twitter}}" readonly>

                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="form-group">
                                <label for="">Google+</label>
                                <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{$subContact->google}}" readonly>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="form-group">
                                <label for="">Pinterest</label>
                                <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{$subContact->pinterst}}" readonly>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="form-group">
                                <label for="">Tiktok</label>
                                <input type="url" name="section_certificates_link" class="form-control placehoder" value="{{$subContact->tiktok}}" readonly>
                                </select>
                              </div>
                            </div>

                          <div class="col-sm-12 text-right mb-3">
                            <a href="{{route("contact-direct.edit",['contact_direct' => $subContact->id])}}" class="btn btn-primary"><i class="far fa-edit"></i> Editar</a>
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
                    <script>document.write(new Date().getFullYear())</script>
                    © Full Tecnologia <span class="d-none d-sm-inline-block">- Crafted with
                    <i class="mdi mdi-heart text-primary"></i> by .</span>
                  </div>
                </div>
              </div>
            </footer>
        </div>
      </div>
@endsection
