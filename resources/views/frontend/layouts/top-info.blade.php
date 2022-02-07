<style>
  .social-circle-border:hover svg path{
    fill: #c5a86a;
  }
</style>
<div id="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul id="top-info">
          <li>Teléfono: --- </li>
          <li>Envíe un correo electrónico a: <a href="mailto:hello@yourrestaurant.com">hello@yourrestaurant.com</a></li>
          <li><a href="#" style="color:#c5a86a;"><i class="fa  fa-clock-o"></i> 08:30 am - 10:30 pm</a></li>
        </ul>

        <ul class="socials-box pull-right">
          @if ($contactDirect->facebook)
            <li><a href="{{$contactDirect->facebook}}"><div class="social-circle-border"><i class="fa fa-facebook"></i></div></a></li>
          @endif
          @if ($contactDirect->twitter)
            <li><a href="{{$contactDirect->twitter}}"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
          @endif
          @if ($contactDirect->google)
            <li><a href="{{$contactDirect->google}}"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
          @endif
          @if ($contactDirect->pinterst)
            <li><a href="{{$contactDirect->pinterst}}"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
          @endif
          @if ($contactDirect->tiktok)
            <li>
              <a href="{{$contactDirect->tiktok}}">
                <div class="social-circle-border">
                  {{-- <svg width="100" height="100">
                    <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
                  </svg>
                  <img  class="image-hover" style="inline-size: 13px;"> --}}
                  <svg width="11" height="15" class="image-hover" viewBox="0 0 21 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5867 3.76C16.5867 3.76 17.2667 4.42667 16.5867 3.76C15.6752 2.7195 15.173 1.38324 15.1733 0H11.0533V16.5333C11.0216 17.428 10.6438 18.2755 9.99969 18.8973C9.35555 19.519 8.49526 19.8665 7.6 19.8667C5.70667 19.8667 4.13333 18.32 4.13333 16.4C4.13333 14.1067 6.34667 12.3867 8.62667 13.0933V8.88C4.02667 8.26667 0 11.84 0 16.4C0 20.84 3.68 24 7.58667 24C11.7733 24 15.1733 20.6 15.1733 16.4V8.01333C16.844 9.21313 18.8498 9.85686 20.9067 9.85333V5.73333C20.9067 5.73333 18.4 5.85333 16.5867 3.76Z" fill="white"/>
                  </svg>

                </div>
              </a>
            </li>
          @endif
        </ul>

      </div>
    </div>
  </div>
</div>
