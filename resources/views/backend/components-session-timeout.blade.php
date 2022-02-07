@extends('backend.layouts.app2')
@section('title')
Session Timeout
@endsection

@section('time')
<link href="{{ asset ('backend/libs/sweetalert2/sweetalert2.min.css') }} " rel="stylesheet" type="text/css" />
@endsection
@section('time2')
<script src="{{ asset ('backend/libs/%40curiosityx/bootstrap-session-timeout/index.js') }} "></script>
<script src="{{ asset ('backend/js/pages/session-timeout.init.js') }} "></script>
@endsection

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Session Timeout</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                <li class="breadcrumb-item active">Session Timeout</li>
                            </ol>
                        </div>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Start page-content-wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="header-title">Bootstrap-session-timeout</h5>
                                <p class="sub-header">Session timeout and keep-alive control with a nice Bootstrap
                                    warning dialog.</p>

                                <div>
                                    <p>After a set amount of idle time, a Bootstrap warning dialog is shown to the
                                        user with the option to either log out, or stay connected. If "Logout"
                                        button is selected, the page is redirected to a logout URL. If "Stay
                                        Connected" is selected the dialog closes and the session is kept alive. If
                                        no option is selected after another set amount of idle time, the page is
                                        automatically redirected to a set timeout URL.
                                    </p>

                                    <p>
                                        Idle time is defined as no mouse, keyboard or touch event activity
                                        registered by the browser.
                                    </p>

                                    <p class="mb-0">
                                        As long as the user is active, the (optional) keep-alive URL keeps getting
                                        pinged and the session stays alive. If you have no need to keep the
                                        server-side session alive via the keep-alive URL, you can also use this
                                        plugin as a simple lock mechanism that redirects to your lock-session or
                                        log-out URL after a set amount of idle time.
                                    </p>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- Container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                        class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                        Themesbrand.</span>
                </div>

            </div>
        </div>
    </footer>
</div>
@endsection