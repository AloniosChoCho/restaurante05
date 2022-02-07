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
                                  <form action="{{ route('sub-blog-list.update', ['sub_blog_list' => $subBlog->id]) }}" enctype="multipart/form-data" class="row" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                      <label for="">Fecha</label>
                                      <input type="text" name="date" id="date" class="form-control" value="{{$subBlog->date}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Titulo</label>
                                      <input type="text" name="title" id="title" class="form-control" value="{{$subBlog->title}}" >
                                    </div>
                                    <div class="form-group">
                                      <label for="">Nombre</label>
                                      <input type ="text" name="name" id="name" class="form-control" value="{{$subBlog->name}}">
                                    </div>
                                    <div class="form-group mb-3">
                                      <label class="mb-0" for="">Imagen</label>
                                      <input type="file" accept="image/*" class="form-control" name="imagen" id="imagen">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Descripción</label>
                                      <textarea class="form-control textarea" name="description" id="description" row="3">{{$subBlog->description}}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                      <a href="{{ route('sub-blog-list.index') }}" class="btn btn-sm btn-danger">Cancelar</a>
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
