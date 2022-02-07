@extends('frontend.layouts.app')

@section('title')
    Sobre Nosotros
@endsection

@section('content')

<div class="header-background-box half">
			<div class="header-background" data-image-src="{{ asset('storage/about/'.$about->section_title_image) }} ">
				<div class="webkit-and-moz-overlay-background">
					<div class="container">
						<div class="center-section">
						<h2 class="section-title white-decor">{{$about->section_title_title}}</h2>
						<div class="section-subtitle">{{$about->section_title_description}}</div>
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
				<a href="about.html">Acerca de</a>
			</div>
		</div>
		<!-- END SITE MAP -->

		<!-- BEGIN THE HISTORY  -->
		<section class="about-history">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title-border">{{$about->section_history_title}}</h2>
						<div class="section-subtitle">{{$about->section_history_description}}</div>

            @foreach ($about_histories as $about_history)
              <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                <div class="frame-image" data-image-src="{{ asset('storage/about_history/'.$about_history->image) }} ">
                  <div class="top-mask"></div>
                  <div class="bottom-mask"></div>
                    <div class="width-box">
                      <!-- <div class="left-mask"></div> -->
                      <div class="content">
                        <h3 class="title manuscript"> {{ $about_history->title}} </h3>
                        <p>{{ $about_history->description}} </p>
                        @if ($about_history->link)
                          <div class="button-section">
                            <a href="{{ $about_history->link}}" target="_blank" class="btn btn-sm btn-primary">Leer más</a>
                          </div>
                        @endif
                      </div>
                  </div>
                </div>
              </div>
            @endforeach
						{{-- <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
							<div class="frame-image" data-image-src="{{ asset ('frontend/assets/images/content/about-content-frame-2.jpg') }} ">
								<div class="top-mask"></div>
								<div class="bottom-mask"></div>
									<div class="width-box">
										<!-- <div class="left-mask"></div> -->
										<div class="content">
											<h3 class="title manuscript">Since 1983</h3>
											<p>Hay muchas variaciones de pasajes de Lorem Ipsum, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, debes asegurarte de que no hay nada embarazoso escondido en medio del texto.</p>

											<p>Después de 16 años en el negocio de la restauración, 9 en el de la agricultura y varios años dedicados al estudio de la nutrición, decidimos que era el momento adecuado para tomar toda esa experiencia y sintetizarla en un restaurante local donde la gente pueda disfrutar de una comida exquisita, apoyar a los productores locales de alimentos y comer el tipo de comida con el que se puede sentir bien.</p>
											<div class="button-section">
												<a href="#" class="btn btn-primary btn-sm">Leer más</a>
											</div>
										</div>
								</div>
							</div>
						</div> --}}
					</div>
				</div>

			</div>
	</section>
		<!-- END ABOUT -->


	<!-- BEST SERVICE NOW  -->
	<section class="best-service parallax-box" style="background-image: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.64) 0%,rgba(0, 0, 0, 0.79) 100%), url(..images/content/service-parallax.html);
    background-image: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.64) 0%,rgba(0, 0, 0, 0.79) 100%), url( {{ asset('frontend/assets/images/content/service-parallax.jpg') }});
    background-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.64) 0%,rgba(0, 0, 0, 0.79) 100%), url({{ asset('frontend/assets/images/content/service-parallax.jpg') }});">
		<div class="mediaSection-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

							<div class="vertical-midle">
								<h2 class="section-title white-decor">{{$about->section_service_title}}</h2>
								<div class="section-subtitle">{{$about->section_service_description}}</div>
								<ul class="star-box">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
									<!-- <div class="section-subtitle">Restoring authenticity to food from the ground up is the missioin that drives us. Restauration is the realization of a dream.</div> -->
							</div>

					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
	</section>

	{{-- <section class="chef-team-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section-title">El equipo de Thef</h2>
					<div class="section-subtitle">¡Conozca al impresionante personal!</div>
							<div class="owl-carousel owl-chef-team-slider"> <!-- On team slide  -->
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><a href="#"><img src="{{ asset ('frontend/assets/images/content/01_chef-team_550x740.jpg') }} " alt=""></a></div>
										<div class="info">
											<a href="#"><h3 class="manuscript">Edmond Halley</h3>
											<h3 class="section-title-border">Jefe de cocina</h3></a>
											<ul class="socials-box">
												<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
											</ul>
										</div>
									</div>
								</div><!-- OFF item  -->
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><a href="#"><img src="{{ asset ('frontend/assets/images/content/02_chef-team_550x740.jpg') }} " alt=""></a></div>
										<div class="info">
											<a href="#"><h3 class="manuscript">Ruzena Bajcsy</h3>
											<h3 class="section-title-border">Jefe de cocina</h3></a>
											<ul class="socials-box">
												<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
											</ul>
										</div>
									</div>
								</div><!-- OFF item  -->
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><a href="#"><img src="{{ asset ('frontend/assets/images/content/03_chef-team_550x740.jpg') }} " alt=""></a></div>
										<div class="info">
											<a href="#"><h3 class="manuscript">John Parkinson</h3>
											<h3 class="section-title-border">Jefe de cocina</h3></a>
											<ul class="socials-box">
												<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
											</ul>
										</div>
									</div>
								</div><!-- OFF item  -->
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><a href="#"><img src="{{ asset ('frontend/assets/images/content/04_chef-team_550x740.jpg') }} " alt=""></a></div>
										<div class="info">
											<a href="#"><h3 class="manuscript">Sarah Boysen</h3>
											<h3 class="section-title-border">Jefe de cocina</h3></a>
											<ul class="socials-box">
												<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
											</ul>
										</div>
									</div>
								</div><!-- OFF item  -->
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><a href="#"><img src="{{ asset ('frontend/assets/images/content/05_chef-team_550x740.jpg') }} " alt=""></a></div>
										<div class="info">
											<a href="#"><h3 class="manuscript">Michael Faraday</h3>
											<h3 class="section-title-border">Jefe de cocina</h3></a>
											<ul class="socials-box">
												<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
												<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
											</ul>
										</div>
									</div>
								</div><!-- OFF item  -->
							</div><!-- OFF team slide  -->
					</div>
				</div>
			</div>
    </section>
     --}}
     <section class="certificates">
        <div class="container">
            <h2 class="section-title">{{$about->section_certificates_title}}</h2>
            <div class="section-subtitle">
                {{$about->section_certificates_description}}
            </div>
            <div class="button-section">
                @if ($about->section_certificates_link)
                   <div class="button-section">
                   <a href="{{ $about->section_certificates_link}}" target="_blank" class="btn btn-primary btn-sm ">Ver completo</a>
                   </div>
               @endif
            </div>
        </div>
    </section>

		{{-- <section class="testimonials parallax-box">
			<div class="mediaSection-box">
				<div class="container">
						<div class="owl-carousel owl-testimonials"> <!-- On testimonials slide  -->
								<div class="item-bg-box"><!-- On item  -->
									<div class="thumb-section">
											<img src="{{ asset ('frontend/assets/images/content/testimonials-01.jpg') }} " alt="">
										<h3 class="name">John Parkinson</h3>
										<div class="town">Nueva York</div>
									</div>
									<div class="desc">
											<p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
									</div>
								</div><!-- OFF item  -->
								<div class="item-bg-box"><!-- On item  -->
									<div class="thumb-section">
											<img src="{{ asset ('frontend/assets/images/content/testimonials-02.jpg') }} " alt="">
										<h3 class="name">Sarah Boysen</h3>
										<div class="town">California</div>
									</div>
									<div class="desc">
											<p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
									</div>
								</div><!-- OFF item  -->
								<div class="item-bg-box"><!-- On item  -->
									<div class="thumb-section">
											<img src="{{ asset ('frontend/assets/images/content/testimonials-03.jpg') }} " alt="">
										<h3 class="name">Goodall Family</h3>
										<div class="town">Virginia</div>
									</div>
									<div class="desc">
											<p><i class="fa fa-quote-left"></i>Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si va a utilizar un pasaje de Lorem Ipsum, necesita<i class="fa fa-quote-right"></i></p>
									</div>
								</div><!-- OFF item  -->

						</div><!-- OFF Testimoials slide  -->
				</div>
			</div>
		</section> --}}
		<!-- END TESTIMONIALS  -->

		<!-- BEGIN CERTIFICATES  -->

@endsection
