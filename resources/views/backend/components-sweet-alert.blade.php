@extends('backend.layouts.app2')
@section('title')
Sweet-Alert
@endsection

@section('alert1')
<link href="{{ asset ('backend/libs/sweetalert2/sweetalert2.min.css') }} " rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-0 font-size-18">Sweet-Alert</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                <li class="breadcrumb-item active">Sweet-Alert</li>
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

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">A beautiful, responsive, customizable
                                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                    dependencies.</p>

                                <div class="row text-center">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A basic message</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-basic">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A title with a text under</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-title">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A success message!</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-success">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A warning message, with a function attached<br> to the
                                                "Confirm"-button...</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-warning">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>By passing a parameter, you can execute
                                                <br>something else for "Cancel".
                                            </p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-params">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A message with custom Image Header</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-image">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A message with auto close timer</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-close">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>Custom HTML description and buttons</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="custom-html-alert">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A custom positioned dialog</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="sa-position">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>A message with custom width, padding and background</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="custom-padding-width-alert">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <p>Ajax request example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                            id="ajax-alert">Click me</button>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>Chaining modals (queue) example</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="chaining-alert">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                        <div class="p-3">
                                            <p>Dynamic queue example</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="dynamic-alert">Click me</button>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                </div>
                                <!-- End Row -->

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
        </div> <!-- container-fluid -->
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

@section('alert2')

<script src="{{ asset ('backend/libs/sweetalert2/sweetalert2.min.js') }} "></script>
<script src="{{ asset ('backend/js/pages/sweet-alerts.init.js') }} "></script>

@endsection