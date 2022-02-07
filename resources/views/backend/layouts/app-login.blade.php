<!doctype html>
<html lang="en"> 
<head>

        <meta charset="utf-8" />
        <title> @yield('title') | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{ asset ('backend/images/favicon.ico') }} ">

        <link href="{{ asset ('backend/css/bootstrap.min.css') }} " id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('backend/css/icons.min.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset ('backend/css/app.min.css') }} " id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">


        <div class="account-pages"></div>
        
        @yield('content')

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset ('backend/images/layouts/layout-1.png') }} " class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset ('backend/images/layouts/layout-2.png') }} " class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="{{ asset ('backend/css/bootstrap-dark.min.css') }} " data-appStyle="{{ asset ('backend/css/app-dark.min.css') }} " />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset ('backend/images/layouts/layout-3.png') }} " class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="{{ asset ('backend/css/app-rtl.min.css') }} " />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>

            </div>
        </div>

        <div class="rightbar-overlay"></div>

        <script src="{{ asset ('backend/libs/jquery/jquery.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/metismenu/metisMenu.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/simplebar/simplebar.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/node-waves/waves.min.js') }} "></script>
        <script src="{{ asset ('backend/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>

        <script src="{{ asset ('backend/js/app.js') }} "    ></script>

    </body>


</html>