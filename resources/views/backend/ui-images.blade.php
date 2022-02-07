@extends('backend.layouts.app2')
@section('title')
    Images
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
                            <h4 class="mb-0 font-size-18">Images</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Images</li>
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
                <!-- Start Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Image Rounded & Circle</h4>
                                <p class="card-title-desc">Use classes
                                    <code>.rounded</code> and <code>.rounded-circle</code>.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="rounded me-2 shadow" alt="200x200" width="200"
                                            src="{{ asset ('backend/images/small/img-4.jpg') }} " data-holder-rendered="true">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mt-4 mt-md-0">
                                            <img class="rounded-circle shadow avatar-xl" alt="200x200"
                                                src="{{ asset ('backend/images/users/avatar-4.jpg') }} " data-holder-rendered="true">
                                        </div>
                                    </div>

                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Image thumbnails</h4>
                                <p class="card-title-desc">In addition to our border-radius utilities, you can use
                                    <code class="highlighter-rouge">.img-thumbnail</code> to give an image a rounded
                                    1px border appearance.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-thumbnail shadow" alt="200x200" width="200"
                                            src="{{ asset ('backend/images/small/img-3.jpg') }} " data-holder-rendered="true">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-4 mt-md-0">
                                            <img class="img-thumbnail shadow rounded-circle avatar-xl" alt="200x200"
                                                src="{{ asset ('backend/images/users/avatar-3.jpg') }} " data-holder-rendered="true">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive images</h4>
                                <p class="card-title-desc">Images in Bootstrap are made responsive with <code
                                        class="highlighter-rouge">.img-fluid</code>. <code
                                        class="highlighter-rouge">max-width: 100%;</code> and <code
                                        class="highlighter-rouge">height: auto;</code> are applied to the image so
                                    that it scales with the parent element.</p>

                                <div class="">
                                    <img src="{{ asset ('backend/images/small/img-2.jpg') }} " class="img-fluid shadow"
                                        alt="Responsive image">
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col-->

                </div>
                <!-- end row -->

                <!-- start row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Image Sizes</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-3.jpg') }} " alt=""
                                                        class="rounded avatar-sm shadow">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-4.jpg') }}" alt=""
                                                        class="rounded avatar-md shadow">
                                                    <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-5.jpg') }} " alt=""
                                                        class="rounded avatar-lg shadow">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                        </div>
                                        <!-- End Row-->
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-3.jpg') }} " alt=""
                                                        class="rounded-circle avatar-sm shadow">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-4.jpg') }} " alt=""
                                                        class="rounded-circle avatar-md shadow">
                                                    <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="{{ asset ('backend/images/users/avatar-5.jpg') }} " alt=""
                                                        class="rounded-circle avatar-lg shadow">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                                </div>
                                            </div>
                                            <!-- End Col-->

                                        </div>
                                        <!-- End Row-->
                                    </div>
                                    <!-- End Col-->

                                </div>
                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col-->
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