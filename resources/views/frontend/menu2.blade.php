@extends('frontend.layouts.app')
@section('title')
    Menu 2
@endsection

@section('styles')
  <style>
    .type-menu {
      padding-bottom: 4rem;
    }
    .type-menu:last-child {
      padding-bottom: 0;
    }
  </style>
@endsection

@section('content')
<div class="header-background-box half">
    <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/menu_header_background.jpg') }} ">
        <div class="webkit-and-moz-overlay-background">
            <div class="container">
                <div class="center-section">
                    <h2 class="section-title-border whiteTitleBorder">{{$menu->header_title}}</h2>
                    <div class="section-subtitle">{{$menu->header_description ?? ''}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-map">
    <div class="container">
        <a href="index.html">Inicio</a>
        <a href="menu2.html">Menú Variante 2</a>
    </div>
</div>

<div class="menu-page">
  <section class="menu-standart background-img parallax-box">
      <div class="mediaSection-box">
      <div class="container">
        @foreach ($menuList as $itemMenu)
          <div class="type-menu">
              <h2 class="section-title">{{ $itemMenu->title_list }}</h2>
              <div class="section-subtitle">{{ $itemMenu->description_list }}</div>
              <div class="menu-frame flex-row row">
                @forelse ($itemMenu->platillos as $itemSubmenu)
                  @if ($itemSubmenu->is_active)
                    <div class="col-sm-6">
                      <div class="menu-base">
                          <div class="title-box">
                            <h3 class="title manuscript">
                              {{ $itemSubmenu->name }}

                              @if ($itemSubmenu->alert_message)
                                <span class="note-new">{{ $itemSubmenu->alert_message }}</span>
                              @endif
                            </h3>
                              <span class="price manuscript"><sup>S/</sup>{{ $itemSubmenu->price }}</span>
                            <div class="line-box"><div class="line-dotted"></div></div>
                          </div>
                          <div class="desc">
                            <p>{{ $itemSubmenu->description }}</p>
                          </div>
                      </div>
                    </div>
                  @endif
                @empty
                  <div class="col-sm-12">
                    <div class="menu-base text-center">
                      <h3>Sin platillos</h3>
                    </div>
                  </div>
                @endforelse
              </div>
            </div>
        @endforeach
        </div>
      </div>
  </section>
</div>
@endsection
