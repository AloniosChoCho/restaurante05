@extends('frontend.layouts.app')
@section('title')
    Menu 1
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/menu_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">Menú Variante 1</h2>
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
        <a href="menu.html">Variante del menú 1</a>
    </div>
</div>
<!-- END SITE MAP -->

<!-- MENU OF THE DAY -->
<section class="menu-list-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Estilo de ubicación de la etiqueta de menú</h2>
                <div class="section-subtitle">Restaurar la autenticidad de los alimentos desde la base es la misión que nos impulsa. La restauración es la realización de un sueño.</div>
                <hr>
                    <ul class="menu-button-filter edit-marginTop40">
                        <li data-filter="*" class="tagsort-active">
                            <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-bell"></i></div>
                            <span class="r-name">Todo</span></li>
                        <li data-filter=".starter" class="">
                            <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-coffee"></i></div>
                            <span class="r-name">Arrancadores</span></li>
                        <li data-filter=".breakfast" class="">
                            <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-breakfast"></i></div>
                            <span class="r-name">Desayuno</span></li>
                        <li data-filter=".desserts" class="">
                            <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-cupcake"></i></div>
                            <span class="r-name">Postres</span></li>
                        <li data-filter=".drinks" class="">
                            <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-dinner"></i></div>
                            <span class="r-name">Bebidas</span></li>
                    </ul>
                    <div class="row menu-items-list">
                            <div class="menu-item col-sm-6 col-xs-12 starter">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 drinks breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 drinks breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 drinks breakfast">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Salsa de pasta de pescado frito</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter desserts">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Pescado frito con salsa</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                            <div class="menu-item col-sm-6 col-xs-12 starter desserts">
                                <div class="clearfix menu-wrapper">
                                    <h3 class="title manuscript">Salsa de pasta de pescado frito</h3>
                                    <span class="price">$35.00</span>
                                    <div class="desc"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>
<!-- END MENU OF THE DAY -->

<!-- BEGIN SPECIAL MENU  -->
<section class="special-menu parallax-box">
<div class="mediaSection-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h2 class="section-title-border">Menú especial</h2>
            <div class="section-subtitle">Restaurar la autenticidad de los alimentos desde la base es la misión que nos impulsa. La restauración es la realización de un sueño.</div>
                    <div class="owl-carousel special-menu-slider"> <!-- On special-menu list  -->
                    <div class="item-frame-box"><!-- On item  -->
                        <div class="item-bg-box">
                            <div class="image"><img src="{{ asset ('frontend/assets/images/content/01_food500x400.jpg') }} " alt=""></div>
                            <div class="info">
                                <h3 class="section-title-border text-uppercase">Nuevos alimentos de pasta</h3>
                                <p>Lorem ipsum dolor sit a met, con secing elitse aldea orem do eius mod tempor</p>
                                <span class="item-price">$39</span>
                                <a href="#" class="btn btn-primary-gray">Pedir ahora</a>
                            </div>
                        </div>
                    </div><!-- OFF item  -->
                    <div class="item-frame-box"><!-- On item  -->
                        <div class="item-bg-box">
                            <div class="image"><img src="{{ asset ('frontend/assets/images/content/02_food500x400.jpg') }} " alt=""></div>
                            <div class="info">
                                <h3 class="section-title-border text-uppercase">Nueva comida para bistecs</h3>
                                <p>Lorem ipsum dolor sit a met, con secing elitse aldea orem do eius mod tempor</p>
                                <span class="item-price">$39</span>
                                <a href="#" class="btn btn-primary-gray">Pedir ahora</a>
                            </div>
                        </div>
                    </div><!-- OFF item  -->
                    <div class="item-frame-box"><!-- On item  -->
                        <div class="item-bg-box">
                            <div class="image"><img src="{{ asset ('frontend/assets/images/content/03_food500x400.jpg') }} " alt=""></div>
                            <div class="info">
                                <h3 class="section-title-border text-uppercase">Nuevas bebidas</h3>
                                <p>Lorem ipsum dolor sit a met, con secing elitse aldea orem do eius mod tempor</p>
                                <span class="item-price">$39</span>
                                <a href="#" class="btn btn-primary-gray">Pedir ahora</a>
                            </div>
                        </div>
                    </div><!-- OFF item  -->
                    <div class="item-frame-box"><!-- On item  -->
                        <div class="item-bg-box">
                            <div class="image"><img src="{{ asset ('frontend/assets/images/content/04_food500x400.jpg') }} " alt=""></div>
                            <div class="info">
                                <h3 class="section-title-border text-uppercase">Nuevos alimentos del desierto</h3>
                                <p>Lorem ipsum dolor sit a met, con secing elitse aldea orem do eius mod tempor</p>
                                <span class="item-price">$39</span>
                                <a href="#" class="btn btn-primary-gray">Pedir ahora</a>
                            </div>
                        </div>
                    </div><!-- OFF item  -->
                    <div class="item-frame-box"><!-- On item  -->
                        <div class="item-bg-box">
                            <div class="image"><img src="{{ asset ('frontend/assets/images/content/05_food500x400.jpg') }} " alt=""></div>
                            <div class="info">
                                <h3 class="section-title-border text-uppercase">Nuevos alimentos del desierto</h3>
                                <p>Lorem ipsum dolor sit a met, con secing elitse aldea orem do eius mod tempor</p>
                                <span class="item-price">$39</span>
                                <a href="#" class="btn btn-primary-gray">Pedir ahora</a>
                            </div>
                        </div>
                    </div><!-- OFF item  -->
                </div><!-- OFF special-menu list  -->
            </div>
        </div><!-- Off row  -->
    </div>
</div>
</section>
<!-- END SPECIAL MENU  -->

<!-- BEGIN CERTIFICATES  -->
<section class="certificates">
        <div class="container">
            <h2 class="section-title">Certificados y premios recibidos</h2>
            <div class="section-subtitle">
                Pasta Restourant, es el mejor restourant en Nueva York y ha sido reconocido con muchos premios. Nos comprometemos a proporcionar un excelente servicio a usted siempre para la felicidad y el éxito. Para obtener más detalles por favor visítenos.
            </div>
            <div class="button-section">
                <a href="#" class="btn btn-primary btn-sm">Ver completo</a>
            </div>
        </div>
</section>
@endsection