@extends('backend.layouts.app2')

@section('title')
 Sub Blog
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
                          <h5 class="text-primary"> Blog Titulo</h5>
                        </div>
                        @if(session('success'))
                          <div class="alert alert-success">
                            {{ session('success') }}
                          </div>
                        @endif

                        <div class="col-sm-12 col-md-12 mb-3">
                          <div class="form-group">
                            <label for="">Fecha</label>
                            <input type="text" class="form-control" value="{{$subBlog->date}}" readonly>

                          </div>
                          <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" value="{{$subBlog->title}}" readonly >

                          </div>
                          <div class="form-group">
                            <label for="">Nombre</label>
                            <input type ="text" class="form-control" value="{{$subBlog->name}}" readonly >

                          </div>
                          <div class="form-group">
                            <label for="">Imagen</label>
                            <textarea class="form-control textarea" readonly row="3">{{$subBlog->imagen}}</textarea>

                          </div>
                          <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea class="form-control textarea" readonly row="3">{{$subBlog->description}}</textarea>

                          </div>
                        <div class="col-sm-12 text-right mb-3">
                          <a href="{{route("sub-blog-list.edit",['sub_blog_list' => $subBlog->id ])}}" class="btn btn-primary"><i class="far fa-edit"></i> Editar</a>
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
