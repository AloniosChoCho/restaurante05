@extends('frontend.layouts.app')
@section('title')
    Blog Full Width
@endsection
@section('content')
<div class="header-background-box">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/blog_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">Página del blog</h2>
                    <div class="section-subtitle">Restaurar la autenticidad de los alimentos desde la base es la misión que nos impulsa. La restauración es la realización de un sueño.</div>
                    <div class="button-section">
                            <a href="javascript:void(0)" class="btn btn-o-primary">Noticias interesantes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER BACKGROUND -->

<!-- BEGIN SITE MAP -->
<div class="site-map">
    <div class="container">
        <a href="index.html">Inicio</a>
        <a href="blog_right_sidebar.html">Página del blog</a>
    </div>
</div>
<!-- END SITE MAP -->

<!-- BEGIN BLOG PAGE  -->
<section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <article>
                        <div class="post-date">23 de octubre de 2016</div>
                        <h3 class="post-title">
                            <a href="blog_single.html">Las limonadas minerales más antiguas</a>
                        </h3>
                        <hr>
                        <div class="post-info row">
                            <div class="col-md-7 col-sm-7">
                                <span class="post-author">por <a href="#">John Parkinson</a></span>
                                <span class="post-category">en <a href="blog_right_sidebar.html">Blog</a>, <a href="blog_single.html">Psta</a></span>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="right-position">
                                    <div class="post-comment"><i class="fa fa-comments-o"></i> 3</div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset ('frontend/assets/images/content/01-preview860x450.jpg') }} " alt="">
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et.</p>
                        <div class="button-section">
                            <a href="blog_single.html" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </article>
                    <article>
                        <div class="post-date">22 de octubre de 2016</div>
                        <h3 class="post-title">
                            <a href="blog_single.html">Pasta con bacon y champiñones</a>
                        </h3>
                        <hr>
                        <div class="post-info row">
                            <div class="col-md-7 col-sm-7">
                                <span class="post-author">by <a href="#">John Parkinson</a></span>
                                <span class="post-category">in <a href="blog_right_sidebar.html">Blog</a>, <a href="blog_single.html">Psta</a></span>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="right-position">
                                    <div class="post-comment"><i class="fa fa-comments-o"></i> 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="embed-container">
                            <iframe src="http://player.vimeo.com/video/222178984" width="560" height="350" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et.</p>
                        <div class="button-section">
                            <a href="blog_single.html" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </article>
                    <article>
                        <div class="post-date">22 de octubre de 2016</div>
                        <h3 class="post-title">
                            <a href="blog_single.html">Receta de pasta de verduras y pescado</a>
                        </h3>
                        <hr>
                        <div class="post-info row">
                            <div class="col-md-7 col-sm-7">
                                <span class="post-author">by <a href="#">John Parkinson</a></span>
                                <span class="post-category">in <a href="blog_right_sidebar.html">Blog</a>, <a href="#">Psta</a></span>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="right-position">
                                    <div class="post-comment"><i class="fa fa-comments-o"></i> 3</div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset ('frontend/assets/images/content/02-preview860x450.jpg') }} " alt="">
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et.</p>
                        <div class="button-section">
                            <a href="blog_single.html" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </article>
                    <div class="clearfix"></div>
                    <div class="pagination">
                        <ul id="previous">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        </ul>
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                        <ul id="next">
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- END container  -->
</section>
@endsection