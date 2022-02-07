@extends('frontend.layouts.app')

@section('title')
    Blog Individual
@endsection

@section('styles')
    <style>
        .form-select:focus-visible {
            border: none;
        }

        .form-select:focus {
            border: 1px solid #6d7477 !important;
        }

        .form-select {
            border-radius: 0;
            background-color: #151515;
            border-color: #323232;
            color: #6d7477;
            font-weight: bold;
            cursor: pointer;
        }

    </style>
@endsection

@section('content')

    <div class="header-background-box">
        <div class="header-background"
            data-image-src="{{ asset('frontend/assets/images/content/blog_header_background.jpg') }} ">
            <div class="webkit-and-moz-overlay-background">
                <div class="container">
                    <div class="center-section">
                        <h2 class="section-title-border whiteTitleBorder">{{ $blog->title_blog }}</h2>
                        <div class="section-subtitle">{{ $blog->description_blog }}</div>
                        <div class="button-section">
                            <a href="{{ $blog->link }}" target="_blank" class="btn btn-o-primary">Noticias interesantes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-map">
        <div class="container">
            <a href="index.html">Inicio</a>
            <a href="blog_right_sidebar.html">Página del blog</a>
            <a href="blog_single.html">Blog Individual</a>
        </div>
    </div>

    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <article>
                        <div class="post-date">{{$subBlog->date}}</div>
                        <h3 class="post-title">
                            <a >{{$subBlog->title}}</a>
                        </h3>
                        <hr>
                        <div class="post-info row">
                            <div class="col-md-7 col-sm-7">
                                <span class="post-author">por <a href="#">{{$subBlog->name}}</a></span>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="right-position">
                                    <div class="post-comment"><i class="fa fa-comments-o"></i>{{ count($comments) ? count($comments) : '' }}</h3></div>
                                </div>
                            </div>
                        </div>
                        <img class="main-image"
                            src="{{ asset('storage/sub_blog/'.$subBlog->imagen) }} " alt="">
                        <p>{{$subBlog->description}}</p>
                    </article>

                    <hr>

                    <div class="clearfix"></div>
                    <div class="comment-section">
                        <h3 class="comment-title"> {{ count($comments) ? count($comments) : '' }} comentarios</h3>
                        <ul>
                          @forelse ($comments as $comment)
                          <ul class="comment-listings">
                            <li>
                                <div class="comment">
                                    <div class="user-image">
                                        <img class="image-thumb"
                                            src="{{ asset('frontend/assets/images/men.png') }} " alt="">

                                    </div>
                                    <div class="comment-info">
                                        <div class="author">{{$comment->name}}</div>
                                        <div class="author">({{$comment->gender ? "Varon" : "Mujer" }})</div>
                                        {{-- <div class="time"><i class="fa fa-clock-o"> </i> Hace 5 horas</div> --}}
                                        <p><div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.{{$comment->comment}}</div></p>
                                        <p><div  class="author">{{$comment->phone}}</div></p>
                                        <div  class="author">&nbsp&nbsp({{$comment->email}})</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                          @empty
                            <i class="fa fa-comments-o text-center" aria-hidden="true" style="font-size: 9rem; display: block"></i>
                              <h4 class="text-center mb-1">Sin comentarios</h4>
                          @endforelse
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                    <div class="comment-respond">
                      <h3 class="comment-reply-title">Has un comentario</h3>
                      @if ($errors->all())
                        <ul>
                          @foreach ($errors->all() as $message)
                            <li>{{$message}}</li>
                          @endforeach
                        </ul>
                      @endif
                      <form method="POST" action="{{ route('blog-comments.store') }}" class="comment-form">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre completo">
                            </div>
                            <div class="form-group">
                              <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Su número de teléfono">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Su correo electrónico">
                            </div>
                            <div class="form-group">
                              <select name="gender" class="form-control form-select" value="{{ old('gender') }}">
                                <option value="0">Mujer</option>
                                <option value="1">Varón</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <textarea class="form-control" name="comment" style="block-size: 209px; resize: none" placeholder="Comentario">{{ old('comment') }}</textarea>
                            </div>
                          </div>
                          <div class="col-sm-12 edit-marginTop30">
                            <button type="submit" class="btn btn-primary btn-sm">Enviar comentario</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
