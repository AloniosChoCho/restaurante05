@extends('frontend.layouts.app')
@section('title')
    Recipe Single
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/recipe_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">Receta Signle</h2>
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
        <a href="recipe-single.html">Pasta blanca de marisco</a>
    </div>
</div>
<!-- END SITE MAP -->

<!-- BEGIN BLOG PAGE  -->
<section class="recipe-content-sigle">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="pasta-item-slide">
                        <div id="item-images" class="owl-carousel">
                          <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/01_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/02_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/03_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/04_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/05_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/06_food750x450.jpg') }} " alt="">
                            </div>
                        </div>

                        <div id="item-thumbs" class="owl-carousel">
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/01_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/02_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/03_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/04_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/05_food750x450.jpg') }} " alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset ('frontend/assets/images/content/06_food750x450.jpg') }} " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="price-content edit-marginTop20">
                        <h3 class="price-title">Pasta blanca de marisco</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Contrariamente a la creencia popular, el Lorem Ipsum no es un simple texto al azar. Tiene sus raíces en un fragmento de la literatura latina clásica del año 45 a.C., por lo que tiene más de 2000 años de antigüedad.</p>
                        <p>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, debes asegurarte de que no hay nada embarazoso escondido en medio del texto. Todos los generadores de Lorem Ipsum en Internet tienden a repetir trozos predefinidos según sea necesario, por lo que éste es el primer generador verdadero en Internet.</p>
                        <p>Utiliza un diccionario de más de 200 palabras en latín, combinado con un puñado de estructuras de frases modelo, para generar un Lorem Ipsum de aspecto razonable. Por lo tanto, el Lorem Ipsum generado está siempre libre de repeticiones, humor inyectado, o palabras no características, etc.</p>
                        <div class="embed-container">
                            <iframe src="http://player.vimeo.com/video/222178984" width="560" height="350" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                 <div class="main-right">
                    <div class="chefInfo-box">
                        <div class="image-box"><img src="{{ asset ('frontend/assets/images/thumbs-chef-01-600x600.jpg') }} " alt=""></div>
                        <div class="chef-info">
                            <h3>John Parkinson</h3>
                            <h4>Señor Chef</h4>
                            <p>Contrariamente a la creencia popular, el Lorem Ipsum no es un texto al azar. Tiene sus raíces en un fragmento de la literatura latina clásica del año 45 a.C., por lo que tiene más de 2000 años de antigüedad.</p>
                            <ul class="socials-box chef-socials">
                                <li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="foodInfo-box">
                        <h3 class="food-title">Ingredientes <span class="glyph-icon flaticon-padnote"></span></h3>
                            <ul class="ingred-list">
                                <li><i class="fa fa-check"></i>1 libra de linguini, cocido según las instrucciones del paquete</li>
                                <li><i class="fa fa-check"></i>1 libra de camarones grandes, pelados y desvenados</li>
                                <li><i class="fa fa-check"></i>15 piezas de mejillones, limpios</li>
                                <li><i class="fa fa-check"></i>12 piezas de almejas</li>
                                <li><i class="fa fa-check"></i>1/2 lb. de vieiras de la bahía</li>
                                <li><i class="fa fa-check"></i>1/2 taza de perejil picado</li>
                                <li><i class="fa fa-check"></i>1 cebolla amarilla pequeña, picada</li>
                                <li><i class="fa fa-check"></i>1 cucharadita de ajo picado</li>
                            </ul>
                            <h3 class="food-title">Direcciones <span class="glyph-icon flaticon-chef-hat"></span></h3>
                                <ol class="number-list">
                                    <li>1 lb. de linguini, cocido según las instrucciones del paquete</li>
                                    <li>1 libra de camarones grandes, pelados y desvenados</li>
                                    <li>15 piezas de mejillones, limpios</li>
                                    <li>12 piezas de almejas</li>
                                    <li>1/2 lb. de vieiras de la bahía</li>
                                    <li>1/2 taza de perejil picado</li>
                                    <li>1 cebolla amarilla pequeña picada</li>
                                    <li>1 cucharadita de ajo picado</li>
                                </ol>
                                <h3 class="food-title">Nutrición <span class="glyph-icon flaticon-point-of-service"></span></h3>
                                <table class="foodInfo-table">
                                    <tr>
                                        <th class="pasta-tg">Cantidad por porción</th>
                                        <th class="pasta-tg">Total</th>
                                        <th class="pasta-tg">Valor diario</th>
                                    </tr>
                                    <tr>
                                        <td class="pasta-tg">Colesterol</td>
                                        <td class="pasta-tg">210mg</td>
                                        <td class="pasta-tg center">70%</td>
                                    </tr>
                                    <tr>
                                        <td class="pasta-tg">Sodio</td>
                                        <td class="pasta-tg">2160mg</td>
                                        <td class="pasta-tg center">90%</td>
                                    </tr>
                                    <tr>
                                        <td class="pasta-tg">Proteína</td>
                                        <td class="pasta-tg">52g</td>
                                        <td class="pasta-tg center">25%</td>
                                    </tr>
                                    <tr>
                                        <td class="pasta-tg">Fibra dietética</td>
                                        <td class="pasta-tg">4g</td>
                                        <td class="pasta-tg center">16%</td>
                                    </tr>
                                    <tr>
                                        <td class="pasta-tg">Azúcar</td>
                                        <td class="pasta-tg">25g</td>
                                        <td class="pasta-tg center">8%</td>
                                    </tr>
                        </table>
                    </div>
                 </div>
                </div> <!-- END col  -->
            </div> <!-- END row  -->
        </div> <!-- END container  -->
</section>
<!-- END BLOG PAGE -->

<!-- BEGIN FEATURED RECIPIE  -->
<section class="featured-recipe">
        <div class="container">
            <h3 class="section-title-border">Receta destacada</h3>
            <div class="owl-carousel owl-featured-recipe">
                <div class="item-box"><!-- ON item  -->
                    <div class="thumb-img">
                        <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="">
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
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- OFF item  -->

                <div class="item-box"><!-- ON item  -->
                    <div class="thumb-img">
                        <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="">
                        <div class="thumb-title">John Parkinson <small>Señor Chef</small></div>
                    </div>
                    <div class="item-main-section">
                        <div class="item-img">
                            <div class="view-image" data-image-src="{{ asset ('frontend/assets/images/content/04_food500x400.jpg') }} "></div>
                        </div>
                        <div class="main-desc">
                            <h3 class="item-title">Su nombre de la receta</h3>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.
                            </div>
                            <div class="button-section">
                                <a href="recipe-single.html" class="btn btn-primary btn-sm">Ver detalles</a>
                            </div>
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- OFF item  -->

                <div class="item-box"><!-- ON item  -->
                    <div class="thumb-img">
                        <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="">
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
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- OFF item  -->

                <div class="item-box"><!-- ON item  -->
                    <div class="thumb-img">
                        <img src="{{ asset ('frontend/assets/images/thumbs-chef-01.jpg') }} " alt="">
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
                            <div class="bd-ratings">
                                <ul class="star-box">
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- OFF item  -->
            </div>
    </div>
</section>
@endsection