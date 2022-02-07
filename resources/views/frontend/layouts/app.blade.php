@php
  use App\ContactDirect;
	function setClassActive($listNameViews) {
		if(in_array( \Request::path(), $listNameViews) ) return 'active';
	}

  $contactDirect = ContactDirect::first();
@endphp
<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8" />
<!-- Page Title -->
<title>@yield('title') - HTML5 Template</title>
<meta name="keywords" content="pasta, responsive, modern html5 template, bootstrap, css3, food, reservation" />
<meta name="description" content="Pasta - Restaurant HTML5 Responsive Template for Restaurants and food" />
<meta name="author" content="Colorful Design - www.bycolorfuldesign.com" />

<!-- Mobile Meta Tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Fav and touch icons -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset ('frontend/assets/images/fav_touch_icons/favicon.ico') }} " />
<link rel="apple-touch-icon" href="{{ asset ('frontend/assets/images/fav_touch_icons/apple-touch-icon.png') }} " />
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset ('frontend/assets/images/fav_touch_icons/apple-touch-icon-72x72.png') }} " />
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset ('frontend/assets/images/fav_touch_icons/apple-touch-icon-114x114.png') }} " />
<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,600,700|Dancing+Script:400,700|Great+Vibes|Josefin+Sans:400,400i,600,600i|Libre+Baskerville|Open+Sans:600,600i,700|Oswald:300,400,700|Yellowtail" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/font-awesome.min.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/food-flaticon.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/js/datepiker/css/datepicker.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/bootstrap.min.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/bootstrap-progressbar.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/js/xpro/slider.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/owl.carousel.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/style.css') }} " />
<link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/skin-colors/dark-skin.css') }} " />

@yield('styles')

</head>
<body class="home-page" >
	<div id="pageloader">
	  <div id="page-loader-box"></div>
		<div id="pageloadDiv" class="page-animate-bottom"></div>
	</div>
	<div id="wrapper">
	<div class="overlay" data-image-src="{{ asset ('frontend/assets/images/content/mob-menu-background.jpg') }} "></div>
		<header id="header">

			@include('frontend.layouts.top-info', compact('contactDirect'))

			<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="{{ route('Index') }}" class="nav-logo"><img src="{{ asset ('frontend/assets/images/logo.png') }} " alt=""></a>

							<button class="nav-mobile-btn is-closed animated fadeInLeft" data-toggle="offcanvas">
								<span class="hamb-top"></span>
								<span class="hamb-middle"></span>
								<span class="hamb-bottom"></span>
							</button>
							<nav id="nav-mobile" class="navbar">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a  class="{{ setClassActive(['/']) }}" href="{{ route('Index') }}">Inicio  <b></b></a>
										<ul class="dropdown-menu">
										</ul>
									</li>
									<li><a class="{{ setClassActive(['about']) }} " href="{{ route('About') }}">Acerca de</a></li>
									<li><a class="{{ setClassActive(['reservation']) }}" href="{{ route('Reservation') }}">Reserva</a></li>
									<li class="dropdown">
										<a class="{{ setClassActive(['menu1','menu2']) }}" href="{{ route('Menu2') }}">Menú</b></a>
									</li>
									<li class="border-none"><a href="{{ route('Index') }}" class="nav-logo"><img src="{{ asset ('frontend/assets/images/logo.png') }} " alt=""></a></li>

									<li class="dropdown">
										<a class="{{ setClassActive(['blogsingle']) }}" href="{{ route('Blog Single') }}">Blog</b></a>
										<ul class="dropdown-menu">
											<li><a class="{{ setClassActive(['blogsingle']) }}" href="{{ route('Blog Single') }}">Blog Individual</a></li>
										</ul>
									</li>
									<li><a class="{{setClassActive(['contact'])}}" href="{{ route('Contact') }}">Contacto</a></li>
                  <li><a class="{{setClassActive(['faq'])}}" href="{{ route('faq') }}">FAQ</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>

    @yield('content')

		<section class="newsletter">
				<div class="container">
					<div class="center-text col-md-12">
					<h2 class="big-title">Suscribirse al boletín de noticias</h2>
					<span class="small-title">Comprueba cómo se cocinan hoy todos los dihes!</span>
					<div class="nl-box">
						<form method="post" id="newsletterform" name="newsletterform" class="newsletter-form" action="https://www.demo.brandmax.pro/themes/pasta/pasta-dark/assets/mail/newsletter.php">
								<input type="email" id="nl-email" class="form-control" name="nl-email" placeholder="Correo electrónico">
								<input type="submit" name="nl-submit" id="nl-submit" class="btn" value="Enviar">
						</form>
						<div id="nl-message"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- END NEWSLETTER  -->
		<!--BEGIN FOOTER -->
		<footer id="footer" class="footer-background">
			<div id="footer-top" class="container">
				<div class="row">
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Acerca de EE.UU.</h3>
							<div id="footer-about">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
							</p>
								<ul class="socials-box footer-socials pull-left">
									<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
								</ul>
							</div>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Contact US</h3>
							<ul id="footer-contacts">
								<li><i class="fa fa-envelope-o"></i> <a href="mailto:reception@youremail.com">reception@youremail.com</a></li>
								<li><i class="fa fa-map-marker"></i>Nueva York, Nombre, 8878 USA</li>
								<li><i class="fa fa-phone"></i>(+001) 888 88 8888<br>(+001) 888 88 8888</li>
							</ul>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Tiempo de trabajo</h3>
							<ul id="footer-work-time">
								<li>
									<span class="date">De lunes a viernes</span><span class="time">8AM-2PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
								<li>
									<span class="date">Sábado</span><span class="time">10AM-5PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
								<li>
									<span class="date">Domingo</span><span class="time">12AM-5PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
							</ul>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Mensaje reciente</h3>
							<ul id="footer-recent-post">
								<li>
									<a href="#">
										<div class="post-image"><img src="{{ asset ('frontend/assets/images/content/thumb-img-160x160.jpg') }} " alt=""></div>
										<div class="info">
											<span class="data-time">11 de septiembre de 2016</span>
											<span class="title">Lorem Ipsum is simply dummy text of the printing</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="post-image"><img src="{{ asset ('frontend/assets/images/content/2_thumb-img-160x160.jpg') }} " alt=""></div>
										<div class="info">
											<span class="data-time">11 de septiembre de 2016</span>
											<span class="title">Lorem Ipsum is simply dummy text of the printing</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
				</div>
			</div>

			<!--BEGIN COPYRIGHT -->
			<div id="copyright">
				<a href="#" class="scrollTopButton">
           <span class="button-square">
               <i class="fa fa-angle-double-up"></i>
           </span>
        </a>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="allright">2018 <strong class="t-color">Pasta </strong> Todos los derechos reservados. Diseñado por <strong class="t-color"> Diseño de colores</strong></span>
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
		</footer>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Libs -->
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/common/jquery-1.9.1.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/common.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/bootstrap-progressbar.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/isotope.pkgd.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/owl.carousel.min.js') }} "></script>

	<!-- Datepiker Script -->
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/datepiker/js/moment.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/datepiker/js/bootstrap-datepicker.js') }} "></script>
	<!-- Hero Slide Scripts -->
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/xpro/js/slider.js') }} "></script>
	<!-- Template Scripts -->
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/scripts.js') }} "></script>
	<script type="text/javascript" src="{{ asset ('frontend/assets/js/contact-mail.js') }} "></script>

	@yield('script')

</body>

<!-- Mirrored from www.demo.brandmax.pro/themes/pasta/pasta-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 21:05:24 GMT -->
</html>
