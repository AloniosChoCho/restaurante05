@extends('frontend.layouts.app')
@section('title')
    Blog Lateral Derecho
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
            <div class="col-md-9">
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
                            <span class="post-author">por <a href="#">John Parkinson</a></span>
                            <span class="post-category">en <a href="blog_right_sidebar.html">Blog</a>, <a href="blog_single.html">Psta</a></span>
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
                            <span class="post-category">in <a href="blog_right_sidebar.html">Blog</a>, <a href="blog_single.html">Psta</a></span>
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
            <div class="col-md-3">
                <aside>
                    <div class="sb-search">
                        <form class="widget-search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar en...">
                            </div>
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="sb-category">
                        <h3 class="widget-title">Categoría</h3>
                        <ul>
                            <li><a href="#">Platos</a></li>
                            <li><a href="#">Salamon</a></li>
                            <li><a href="#">Pasta</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Caliente</a></li>
                            <li><a href="#">Almuerzos</a></li>
                            <li><a href="#">Cenas</a></li>
                            <li><a href="#">Desayuno</a></li>
                        </ul>
                    </div>

                    <div class="sb-latest-posts">
                        <h3 class="widget-title">Últimas noticias</h3>
                        <ul>
                            <li><a href="recipe-single.html">
                                <img src="{{ asset ('frontend/assets/images/content/thumb-img-160x160.jpg') }} " alt="" class="image">
                                <div class="text-box">
                                    <span class="title">Pasta cremosa al pesto de cuadros</span>
                                    <span class="date">6 de diciembre de 2016</span>
                                </div>
                            </a></li>

                            <li><a href="recipe-single.html">
                                <img src="{{ asset ('frontend/assets/images/content/2_thumb-img-160x160.jpg') }} " alt="" class="image">
                                <div class="text-box">
                                    <span class="title">Los 15 mejores restaurantes</span>
                                    <span class="date">6 de diciembre de 2016</span>
                                </div>
                            </a></li>
                        </ul>
                    </div>

                    <div class="sb-tags">
                        <h3 class="widget-title">Etiquetas:</h3>
                        <ul class="tag-content">
                            <li><a href="javascript:void(0)">Platos</a></li>
                            <li><a href="javascript:void(0)">Pasta</a></li>
                            <li><a href="javascript:void(0)">Espaguetis</a></li>
                            <li><a href="javascript:void(0)">Café</a></li>
                            <li><a href="javascript:void(0)">Platos</a></li>
                            <li><a href="javascript:void(0)">Pasta</a></li>
                            <li><a href="javascript:void(0)">Espaguetis</a></li>
                            <li><a href="javascript:void(0)">Café</a></li>
                            <li><a href="javascript:void(0)">Platos</a></li>
                            <li><a href="javascript:void(0)">Pasta</a></li>
                            <li><a href="javascript:void(0)">Espaguetis</a></li>
                            <li><a href="javascript:void(0)">Café</a></li>
                        </ul>
                    </div>

                    <div class="sb-advert edit-marginTop40">
                        <div class="advert-image" data-image-src="{{ asset ('frontend/assets/images/content/03-preview860x450.jpg') }} ">
                            <div class="ads-overlay"></div>
                            <span>- 1982 -</span>
                            <h3><a href="javascript:void(0)">El sabor de la excelencia La ensalada de pescado</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.</p>
                            <div class="button-section">
                                <a href="javascript:void(0)" class="btn btn-o-primary">Ver más</a>
                            </div>
                        </div>
                    </div>

                </aside>
                </div>
            </div>
        </div> <!-- END container  -->
</section>
@endsection