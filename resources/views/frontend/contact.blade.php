@extends('frontend.layouts.app')
@section('title')
    Contactanos
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/contact_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border">{{$contact->title}}</h2>
                    <div class="section-subtitle">{{$contact->description}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-map">
    <div class="container">
        <a href="index.html">Inicio</a>
        <a href="contact.html">Contacte con</a>
    </div>
</div>
<section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-loacation col-md-6">
                            <h3>{{$subContact->sub_title_direction}}</h3>
                            <p><i class="fa fa-map-marker"></i> {{$subContact->direction}}</p>
                    </div>
                 <div class="contact-drect col-md-6">
                        <h3>{{$subContact->sub_title_phone}}</h3>
                        <p><i class="fa fa-phone"></i>{{$subContact->personal_phone}}</p>
                        <p><i class="fa fa-fax"></i> {{$subContact->general_phone}}</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:reception@youremail.com">{{$subContact->email}}</a></p>
                </div>
                <div class="contact-socials col-md-6 ">
                    <h3>{{$subContact->sub_title_social}}</h3>
                    <ul class="socials-box">
                        <li><a target="_:blank" href="{{$subContact->facebook}}"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
                        <li><a target="_:blank" href="{{$subContact->twitter}}"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
                        <li><a target="_:blank" href="{{$subContact->google}}"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
                        <li><a target="_:blank" href="{{$subContact->pinterst}}"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
                        <li><a target="_:blank" href="{{$subContact->tiktok}}"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
                    </ul>
                </div>
            </div>


            @if ($errors->all())
            <ul>
              @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{route ('contact-message.store')}}" class="comment-form">
              @csrf
            <div class="col-md-6 col-sm-6">
                         <div class="col-md-12">
                             <div class="form-group"> <!-- Name field !-->
                                 <input type="text" id="name" name="name" class="form-control" value="{{ old('name')}}" placeholder="Su nombre *" >
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group"> <!-- Email field !-->
                                 <input type="email" id="email" name="email" class="form-control" value="{{ old('phone')}}" placeholder="Su correo electrónico *">
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group"> <!-- Phone field !-->
                                 <input type="number" class="form-control" id="phone" name="phone" value="{{ old('email')}}" placeholder="Su teléfono">
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group"> <!-- Message field !-->
                                 <textarea cols="6" rows="5" class="form-control" id="message" name="message" value="{{ old('message')}}" placeholder="Su mensaje"></textarea>
                             </div>
                         </div>
                         <div class="col-md-12">
                              <div class="center-position">
                                 <button id="submit" type="submit" class="btn btn-primary btn-sm center-button edit-marginTop20">Enviar mensaje</button>
                             </div>
                         </div>
                     </form>
                     <div class="col-md-12">
                         <div id="message"></div>
                     </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map">
    <div id="googleMap" style="position:relative"></div>
</div>
@endsection
