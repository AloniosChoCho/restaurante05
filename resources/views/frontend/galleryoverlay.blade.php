@extends('frontend.layouts.app')
@section('title')
    Superpocición de Galeria
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/reservation_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">Superposición del pulgar de la galería</h2>
                    <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.</div>
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
        <a href="gallery.html">Superposición del pulgar de la galería</a>
    </div>
</div>
<!-- END SITE MAP -->

<!-- BEGIN GALLERY  -->
<section class="gallery-content">
    <div class="container">
        <h2 class="section-title-border edit-padding0">Galería de versiones de superposición de pulgares</h2>
        <div class="section-subtitle edit-paddingTop0 edit-paddingBottom10">Nuestro objetivo es ofrecerle los platos más sorprendentes</div>
        <div id="gallery-box" class="row edit-paddingTop40">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <h4 class="page-title">Versión de la opacidad de la superposición del pulgar</h4>
                    <div class="col-md-4 col-sm-6">
                        <div class="xp-grid-thumb">
                                <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/gallery/1.jpg') }} " data-src="{{ asset ('frontend/assets/images/gallery/1.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="xp-grid-thumb ">
                                <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/gallery/2.jpg') }} " data-src="{{ asset ('frontend/assets/images/gallery/2.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="xp-grid-thumb">
                                <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/gallery/3.jpg') }} " data-src="{{ asset ('frontend/assets/images/gallery/3.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                        </div>
                    </div>
            </div>
         </div><!--  col-md-12 END -->

        <div class="col-md-12 col-sm-12">
            <div class="row">
                <h4 class="page-title">Versión del título de la superposición del pulgar</h4>
                <div class="col-md-4 col-sm-6">
                    <div class="xp-grid-thumb">
                        <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/4.jpg') }} " alt="" />
                            <div class="thumb-info-box">
                                    <div class="centred-box">
                                        <!-- Thumb overlay title-->
                                        <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/4.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                                        <div class="thumb-title manuscript">Pasta de buena comida</div>
                                        <div class="thumb-desc">Pescado frito con salsa</div>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="xp-grid-thumb">
                        <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/5.jpg') }} " alt="" />
                            <div class="thumb-info-box">
                                    <div class="centred-box">
                                        <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/5.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                                        <div class="thumb-title manuscript">Pasta de buena comida</div>
                                        <div class="thumb-desc">Pescado frito con salsa</div>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="xp-grid-thumb">
                        <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/6.jpg') }} " alt="" />
                            <div class="thumb-info-box">
                                    <div class="centred-box">
                                        <img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/6.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" />
                                        <div class="thumb-title manuscript">Pasta de buena comida</div>
                                        <div class="thumb-desc">Pescado frito con salsa</div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div><!--  col-md-12 END -->

     <div class="col-md-12 col-sm-12">
         <div class="row">
             <h4 class="page-title">Versión de enlace de superposición de pulgares</h4>
             <div class="col-md-4 col-sm-6">
                 <div class="xp-grid-thumb">
                     <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/7.jpg') }} " alt="" />
                         <div class="thumb-info-box">
                                 <div class="centred-box">
                                     <!-- Thumb overlay icon on-->
                                     <div class="icon"><span><i class="fa fa-expand"></i><img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/7.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" /></span>

                                     <a href="recipe-single.html"><i class="fa fa-link"></i></a>
                                     </div>
                                     <!-- Thumb icon off-->
                                 </div>
                         </div>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6">
                 <div class="xp-grid-thumb">
                     <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/8.jpg') }} " alt="" />
                         <div class="thumb-info-box">
                                 <div class="centred-box">
                                     <!-- Thumb overlay icon on-->
                                     <div class="icon"><span><i class="fa fa-expand"></i><img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/8.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" /></span>

                                     <a href="recipe-single.html"><i class="fa fa-link"></i></a>
                                     </div>
                                     <!-- Thumb icon off-->
                                 </div>
                         </div>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6">
                 <div class="xp-grid-thumb">
                     <img class="gallery-thumb-image" src="{{ asset ('frontend/assets/images/gallery/9.jpg') }} " alt="" />
                         <div class="thumb-info-box">
                                 <div class="centred-box">
                                     <!-- Thumb overlay icon on-->
                                     <div class="icon"><span><i class="fa fa-expand"></i><img class="gallery-slide-image" src="{{ asset ('frontend/assets/images/non-image.png') }} " data-src="{{ asset ('frontend/assets/images/gallery/9.jpg') }} " title="Pasta de buena comida" alt="Pescado frito con salsa" /></span>

                                     <a href="recipe-single.html"><i class="fa fa-link"></i></a>
                                     </div>
                                     <!-- Thumb icon off-->
                                 </div>
                         </div>
                 </div>
             </div>
            </div>
         </div><!--  col-md-12 END -->

        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    jQuery(document).ready(
        function() {
            var slider = new XPRO.Controls.Slider();
            slider.createSliderStruct({
                                    elements: jQuery('#gallery-box .gallery-slide-image').toArray(),
                sliderOptions: {
                    "mode"              : "slide",
                    "iniWidth"          : 1000,
                    "iniHeight"         : 500,
                    "autoHeightMode"    : "maintainratio",
                    "thumbnails"        : null,
                    "floating"          : true,
                    "autoRun"           : true,
                    "interval"          : 6000,
                    "stopOnHover"       : false,
                    "showProgress"      : true,
                    "infoPanel"         : {panelId: "infopanel"},
                    "onSlide"           : function(cnt) {
                        //select thumbnail
                        jQuery("#gallery-box").find(".xp-grid-thumb").removeClass("xp-grid-thumb-sel");
                        var thm = cnt.elm.getAttribute("data-thumb-idx");
                        jQuery("#gallery-box").find("[data-thumb-idx='"+thm+"']").parent(".xp-grid-thumb").addClass("xp-grid-thumb-sel");
                    }
                },
                                    itemHTML: function(html, idx, elm) {

                    elm.setAttribute("data-thumb-idx", idx);
                    jQuery(elm).on("click", function() {
                        slider.showSlider();
                        slider.slideTo(idx);
                    });

                    html  = "<div class='xpro-slider-item' data-thumb-idx='"+idx+"'><div class='xpro-image-placeholder' data-src='" + elm.getAttribute("data-src") +"' data-class='xpro-kenburns-dir-random' ></div>";
                    html += "<div class='xpro-item-layer p-item-layer' data-effect=\"animate({zoom:'in', delay:'0.8s'})\" >"+elm.getAttribute('alt')+"</div>";
                    html += "<div class='xpro-slider-info'>"+elm.getAttribute('title')+"</div>";
                    html += "</div>";

                    return html;
                },
                beforeHTML: function() {return ""; /*not needed just show it as example*/ },
                afterHTML: function() {return "<div id='infopanel' ></div>"}

            });

        }

    );

</script>
@endsection