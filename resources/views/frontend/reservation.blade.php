@extends('frontend.layouts.app')
@section('title')
  Reservaciones
@endsection

@section('content')
  <div class="header-background-box half">
      <div class="header-background" data-image-src="{{ asset ('frontend/assets/images/content/reservation_header_background.jpg') }} ">
          <div class="webkit-and-moz-overlay-background">
              <div class="container">
                  <div class="center-section">
                      <h2 class="section-title-border whiteTitleBorder">{{$reservation->header_title}}</h2>
                      <div class="section-subtitle">{{$reservation->header_description}}</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="site-map">
    <div class="container">
      <a href="javascript:;">Inicio</a>
      <a href="javascript:;">Reserva</a>
    </div>
  </div>
  <section class="reservation">
          <div class="container">
              <h2 class="section-title">{{$reservation->form_title}}</h2>
              <div class="section-subtitle">
                {{$reservation->form_description}}
              </div>
                  <form  method="post" id="reservation-form" name="reservation" class="reservation-form form-margin" action="https://www.demo.brandmax.pro/themes/pasta/pasta-dark/assets/mail/reservation.php">
                      <div class="row">
                          @if ($reservation->show_form_input_name)
                            <div class="col-md-4 col-sm-6">
                              <div class="form-group">
                                <input type="text" id="rv-name" name="rv-name" class="form-control" placeholder="Nombre completo *">
                              </div>
                            </div>
                          @endif

                          @if ($reservation->show_form_input_phone)
                          <div class="col-md-4 col-sm-6">
                              <div class="form-group"> <!-- Phone field !-->
                                  <input type="number" id="rv-phone" name="rv-phone" class="form-control"  placeholder="Su número de teléfono *">
                              </div>
                          </div>
                          @endif

                          @if ($reservation->show_form_input_email)
                          <div class="col-md-4 col-sm-6">
                              <div class="form-group"> <!-- Email field !-->
                                  <input type="email" id="rv-email" name="rv-email" class="form-control"  placeholder="Su correo electrónico *">
                              </div>
                          </div>
                          @endif

                          @if ($reservation->show_form_input_guest)
                          <div class="col-md-4 col-sm-6">
                              <div class="form-group"> <!-- Guests field !-->
                                  <input type="number" id="rv-guests" name="rv-guests" class="form-control"  min="1" placeholder="Invitados *">
                              </div>
                          </div>
                          @endif

                          @if ($reservation->show_form_input_date)
                          <div class="col-md-4 col-sm-6">
                              <div class="form-group"> <!-- Date field !-->
                                  <div class="input-group date" id="dp-date">
                                          <input type="text" id="rv-date" name="rv-date" class="form-control" placeholder="Fecha">
                                          <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar">
                                                  </span>
                                          </span>
                                  </div>
                              </div>
                          </div>
                          @endif

                          @if ($reservation->show_form_input_time)
                          <div class="col-md-4 col-sm-6">
                              <div class="form-group"> <!-- Time field !-->
                                  <div class="input-group date" id="dp-time">
                                      <input type="text" id="rv-time" name="rv-time" class="form-control" placeholder="Tiempo">
                                      <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-time"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          @endif
                      </div>
                      <div class="center-button edit-marginTop30"> <!-- Submit button !-->
                          <input type="submit" name="rv-submit" id="rv-submit" class="btn btn-primary btn-sm" value="Reservar ahora">
                      </div>
                  </form>
                  <div id="rv-message"></div>
          </div>
  </section>
  <section class="call-reservation">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="call-box">
                      <h3 class="title">También puede llamar para hacer una reserva.</h3>
                      <span class="phone">{{$reservation->contact_phone}}</span>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
