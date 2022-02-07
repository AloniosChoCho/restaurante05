@extends('backend.layouts.app2')
@section('title')
Lightbox 
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
                            <h4 class="mb-0 font-size-18">Lightbox</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                <li class="breadcrumb-item active">Lightbox</li>
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

            <!-- Start Page-content-Wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Single image lightbox</h4>
                                <p class="card-title-desc">Three simple popups with different scaling settings.</p>

                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <h5 class="font-size-14">Fits (Horz/Vert)</h5>
                                            <a class="image-popup-vertical-fit" href="{{ asset ('backend/images/small/img-2.jpg') }} "
                                                title="Caption. Can be aligned it to any side and contain any HTML.">
                                                <img class="img-fluid" alt="" src="{{ asset ('backend/images/small/img-2.jpg') }} "width="145">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <h5 class="font-size-14">Effects</h5>
                                            <a class="image-popup-no-margins" href="{{ asset ('backend/images/small/img-3.jpg') }} ">
                                                <img class="img-fluid" alt="" src="{{ asset ('backend/images/small/img-3.jpg') }} "width="75">
                                            </a>
                                            <p class="mt-2 mb-0 text-muted">No gaps, zoom animation, close icon in
                                                top-right corner.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Lightbox gallery</h4>
                                <p class="card-title-desc">In this example lazy-loading of images is enabled for the
                                    next image based on move direction. </p>

                                <div class="popup-gallery">
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-1.jpg') }} " title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-1.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-2.jpg') }} " title="Project 2">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-2.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-3.jpg') }} " title="Project 3">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-3.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-4.jpg') }} " title="Project 4">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-4.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-5.jpg') }} " title="Project 5">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-5.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-6.jpg') }} " title="Project 6">
                                        <div class="img-fluid">
                                            <img src="{{ asset ('backend/images/small/img-6.jpg') }} " alt="" width="120">
                                        </div>
                                    </a>

                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Zoom Gallery</h4>
                                <p class="card-title-desc">Zoom effect works only with images.</p>

                                <div class="zoom-gallery">
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-3.jpg') }} "
                                        title="Project 1"><img src="{{ asset ('backend/images/small/img-3.jpg') }} " alt=""
                                            width="275"></a>
                                    <a class="float-start" href="{{ asset ('backend/images/small/img-7.jpg') }} "
                                        title="Project 2"><img src="{{ asset ('backend/images/small/img-7.jpg') }} " alt=""
                                            width="275"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Popup with video or map</h4>
                                <p class="card-title-desc">In this example lazy-loading of images is enabled for the
                                    next image based on move direction. </p>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="button-items">
                                            <a class="popup-youtube btn btn-secondary mo-mb-2"
                                                href="https://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube
                                                Video</a>
                                            <a class="popup-vimeo btn btn-secondary mo-mb-2"
                                                href="https://vimeo.com/45830194">Open Vimeo Video</a>
                                            <a class="popup-gmaps btn btn-secondary mo-mb-2"
                                                href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open
                                                Google Map</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Popup with form</h4>
                                <div>
                                    <a class="popup-form btn btn-primary" href="#test-form">Popup form</a>
                                </div>

                                <div class="card mfp-hide mfp-popup-form mx-auto" id="test-form">
                                    <div class="card-body">
                                        <h4 class="mb-4">Form</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Enter Name">
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label for="subject" class="form-label">Subject</label>
                                                        <textarea class="form-control" id="subject"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                                <!-- End Card -->

                            </div>
                            <!-- End Cardbody -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- Container-fluid -->
    </div>
    <!-- End Page-content-wrapper -->


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
