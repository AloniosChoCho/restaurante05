@extends('frontend.layouts.app')
@section('title')
    Recipe 3
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/recipe_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">Página de recetas</h2>
                    <div class="section-subtitle">Restaurar la autenticidad de los alimentos desde la base es la misión que nos impulsa. La restauración es la realización de un sueño.</div>
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
        <a href="recipe-2-col.html">Página de recetas</a>
    </div>
</div>
<!-- END SITE MAP -->

<!-- BEGIN RECIPE  -->
<section class="recipe-content">
        <div class="container">
            <div class="flex-row row">
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/03_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Preparar</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/04_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Prep</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/05_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Prep</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/06_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Preparación</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/07_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Preparación</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-box">
                        <div class="thumb-img">
                            <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="Chef thumb">
                            <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                        </div>
                        <div class="item-main-section">
                            <div class="item-img">
                                <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/08_food500x400.jpg') }} "></div>
                            </div>
                            <div class="main-desc">
                                <h3 class="item-title">Su nombre de la receta</h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                                </div>
                                <div class="button-section">
                                    <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-desc">
                            <ul>
                                <li>
                                    <span class="bd-result">70</span>
                                    <span class="bd-name">Calorías</span>
                                </li>
                                <li>
                                    <span class="bd-result">2</span>
                                    <span class="bd-name">Proteína</span>
                                </li>
                                <li>
                                    <span class="bd-result">Alimentos</span>
                                    <span class="bd-name">Categoría</span>
                                </li>
                                <li>
                                    <span class="bd-result">20 m</span>
                                    <span class="bd-name">Preparación</span>
                                </li>
                            </ul>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="bd-com-icon"><i class="fa fa-comments-o"></i> 4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END container  -->
</section>
@endsection