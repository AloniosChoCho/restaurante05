@extends('frontend.layouts.app')
@section('title')
    Preguntas frecuentes
@endsection
@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/reservation_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">{{$cuestions->title}}</h2>
                    <div class="section-subtitle">{{$cuestions->description}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-map">
    <div class="container">
        <a href="#">Inicio</a>
        <a href="#">Preguntas Frecuentes</a>
    </div>
</div>


<section class="shortcode">
  <div class="container">
    <div class="row edit-paddingTop50 justify-content-center">
      <div class="col-12 col-md-12">
        <h2 class="section-title-border">FAQ</h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          @forelse ($faqs as $faq)
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <span class="panel-title">
                  <a role="button" data-toggle="collapse"
                    data-parent="#accordion"
                    href="#faq-{{$faq->id}}"
                    aria-expanded="true"
                    aria-controls="faq-{{$faq->id}}">
                    <i class="more-less glyphicon glyphicon-plus"></i> {{ $faq->questions }}
                  </a>
                </span>
              </div>
              <div id="faq-{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>{{$faq->answers}}</p>
                </div>
              </div>
            </div>
          @empty
          <div class="col-12 col-sm-12 text-center">
            <i class="fa fa-question-circle-o" style="font-size: 8em;" aria-hidden="true"></i>
            <h5 class="text-center">Sin preguntas frecuentes</h5>
          </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
