@extends('frontend.layouts.app')
@section('title')
    Inicio
@endsection
@section('content')
<div class="xpro-slider-container">
    <div id="scroller" class="xpro-slider">
            <div class="xpro-slider-content">

                   <!--ON Slider Item -->
                    <div class="xpro-slider-item" style="background-image:url({{ asset ('frontend/assets/images/slide/01_preview1600x800.jpg') }});background-position:right center">

                            <div class="xpro-item-layer p-slide-overlay" data-effect="animate({'delay':'0.5s', 'duration':'1s'})"></div>

                            <div class="xpro-item-layer p-intro-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1s', 'duration':'600ms'})">
                                    <div class="logointro">
                                            <img src="{{ asset ('frontend/assets/images/logo_intro.png') }} " alt="" />
                                    </div>
                            </div>

                            <div class="xpro-item-layer p-text-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1.6s', 'duration':'600ms'})">
                                    <h1 class="xpro-item-layer-responsive xp-headtext">Bienvenido al restaurante</h1>
                                    <div class="xpro-item-layer-responsive xp-headsubtext">
                                       Reservar una mesa en línea es fácil
                                    </div>
                            </div>

                    </div> <!--OFF Slider Item -->

                   <!--ON Slider Item -->
                    <div class="xpro-slider-item" style="background-image:url({{ asset ('frontend/assets/images/slide/02_preview1600x800.jpg') }});background-position:right center">

                            <div class="xpro-item-layer p-slide-overlay" data-effect="animate({'delay':'0.5s', 'duration':'1s'})"></div>

                            <div class="xpro-item-layer p-intro-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1s', 'duration':'600ms'})">
                                    <div class="logointro">
                                            <img src="{{ asset ('frontend/assets/images/logo_intro.png') }} " alt="" />
                                    </div>
                            </div>

                            <div class="xpro-item-layer p-text-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1.6s', 'duration':'600ms'})">
                                    <h1 class="xpro-item-layer-responsive xp-headtext">Comida deliciosa</h1>
                                    <div class="xpro-item-layer-responsive xp-headsubtext">
                                       Reservar una mesa en línea es fácil
                                    </div>
                            </div>
                    </div><!--OFF Slider Item -->

            </div>
    </div>
</div>
<section class="menu-list-section">
<div class="container">
   <div class="row">
       <div class="col-sm-12">
           <h2 class="section-title">Menú del día</h2>
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

<!-- RESERVATION NOW  -->
<section class="reservation-now parallax-box">
<div class="mediaSection-box">
<div class="container">
   <div class="row">
       <div class="col-sm-6 col-xs-12">
           <div class="reservation-form-box">
               <h3 class="title manuscript">Reserve su mesa</h3>
               <h2 class="section-title-border">Reservar ahora</h2>

               <form method="post" id="reservation-form" name="reservation-form" class="reservation-form form-margin" action="https://www.demo.brandmax.pro/themes/pasta/pasta-dark/assets/mail/reservation.php">
                   <div class="form-group"> <!-- Name field !-->
                       <input type="text" class="form-control" id="rv-name" name="rv-name" placeholder="Nombre completo">
                   </div>
                   <div class="form-group"> <!-- Phone field !-->
                       <input type="number" class="form-control" id="rv-phone" name="rv-phone" placeholder="Su número de teléfono">
                   </div>
                   <div class="form-group"> <!-- Email field !-->
                       <input type="email" class="form-control" id="rv-email" name="rv-email" placeholder="Su correo electrónico">
                   </div>
                   <div class="form-group"> <!-- Guests field !-->
                       <input type="number" class="form-control" id="rv-guests" name="rv-guests" min="1" placeholder="Invitados">
                   </div>
                   <div class="form-group"> <!-- Date field !-->
                       <div class="input-group date" id="dp-date">
               <input type="text" id="rv-date" class="form-control" placeholder="Fecha" name="rv-date">
               <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar">
                   </span>
               </span>
           </div>
                   </div>
                   <div class="form-group"> <!-- Time field !-->
                       <div class="input-group date" id="dp-time">
       <input type="text" id="rv-time" class="form-control" name="rv-time" placeholder="Tiempo">
       <span class="input-group-addon">
           <span class="glyphicon glyphicon-time"></span>
         </span>
       </div>
                   </div>

                   <div class="center-button edit-marginTop30"> <!-- Submit button !-->
                       <input type="submit" name="rv-submit" id="rv-submit" class="btn btn-primary btn-sm" value="Reservar ahora">
                   </div>
               </form>
                   <div id="rv-message"></div>
           </div>
       </div>
       <div class="col-sm-6 col-xs-12">
           <div class="time-clock-box">
               <span class="top-frames"></span>
               <span class="bottom-frames"></span>
               <ul id="clock">
                 <li id="sec"></li>
                 <li id="hour"></li>
                 <li id="min"></li>
               </ul>
           </div>
       </div>
   </div><!-- /.row -->
</div><!-- /.container -->
</div>
</section>
<!-- END RESERVATION NOW  -->

<!-- RESERVATION CALL  -->
<section class="call-reservation">
<div class="container">
<div class="row">
   <div class="col-sm-12">
       <div class="call-box">
           <h3 class="title">También puede llamar para hacer una reserva.</h3>
           <span class="phone">+1994 654 39 87</span>
       </div>
   </div>
</div>
</div>
</section>
<section class="testimonials parallax-box">
<div class="mediaSection-box">
   <div class="container">
           <div class="owl-carousel owl-testimonials">
                   <div class="item-bg-box">
                       <div class="thumb-section">
                               <img src="{{ asset ('frontend/assets/images/content/testimonials-01.jpg') }} " alt="">
                           <h3 class="name">John Parkinson</h3>
                           <div class="town">Nueva York</div>
                       </div>
                       <div class="desc">
                               <p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
                       </div>
                   </div>
                   <div class="item-bg-box">
                       <div class="thumb-section">
                               <img src="{{ asset ('frontend/assets/images/content/testimonials-02.jpg') }} " alt="">
                           <h3 class="name">Sarah Boysen</h3>
                           <div class="town">California</div>
                       </div>
                       <div class="desc">
                               <p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
                       </div>
                   </div>
                   <div class="item-bg-box">
                       <div class="thumb-section">
                               <img src="{{ asset ('frontend/assets/images/content/testimonials-03.jpg') }} " alt="">
                           <h3 class="name">Familia Goodall</h3>
                           <div class="town">Virginia</div>
                       </div>
                       <div class="desc">
                               <p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
                       </div>
                   </div>

           </div>
   </div>
</div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    // Hero Slide// --------------------------
    jQuery(document).ready(
        function() {
            var slider = new XPRO.Controls.Slider(null);
            slider.initSlider("scroller", {
                    "mode"              : "fade",
                    "dir"               : "left",
                    "iniWidth"          : 1200,
                    "iniHeight"         : 600,
                    "autoRun"           : true,
                    "interval"          : 6000,
                    "autoHeightMode"    : "maintainratio",
                    "thumbnails"        : null,
                    "stopOnHover"       : false,
                    "imageVAlign"       : "bottom",
                    "showProgress"      : false,
                    "enableNavigation"  : true,
                    "onAdjustHeight"    : function(theslider) {
                        //get available height
                        var aH = jQuery(window).innerHeight();
                        var top = jQuery(theslider.rt["scroller"]).position()["top"];
                        return aH-top;
                    }
            });

            jQuery(".xp-custom-navigation").on("click", function() {
                slider.forward();
                return false;
            });
        }
        );
</script>
@endsection
