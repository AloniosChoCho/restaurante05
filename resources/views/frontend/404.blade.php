@extends('frontend.layouts.app')
@section('title')
    Error 404
@endsection
@section('content')
<div class="header-background-box error-header">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/404_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="error-title">404</h2>
                    <h2 class="section-title-border whiteTitleBorder">Página no encontrada</h2>
                    <div class="section-subtitle">La página que busca no existe. Vaya a la página de inicio e inténtelo de nuevo</div>
                    <div class="button-section">
                        <a href="index.html" class="btn btn-primary">Volver a la página de inicio</a>
                        <a href="contact.html" class="btn btn-o-primary">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection