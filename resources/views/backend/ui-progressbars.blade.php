@extends('backend.layouts.app2')
@section('title')
Progress Bar
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
                            <h4 class="mb-0 font-size-18">Progress Bar</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Progress Bar</li>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Default Examples</h4>
                                <p class="card-title-desc">Progress components are built with two HTML elements,
                                    some CSS to set the width, and a few attributes.</p>

                                <div class="">
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Backgrounds</h4>
                                <p class="card-title-desc">Use background utility classes to change the appearance
                                    of individual progress bars.</p>

                                <div class="">
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Labels Example</h4>
                                <p class="card-title-desc">Add labels to your progress bars by placing text within
                                    the <code class="highlighter-rouge">.progress-bar</code>.</p>

                                <div class="">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Cardbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!--End Col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Multiple bars</h4>
                                <p class="card-title-desc">Include multiple progress bars in a progress component if
                                    you need.</p>

                                <div class="">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Cardbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!--End Col-->
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Height</h4>
                                <p class="card-title-desc">We only set a <code
                                        class="highlighter-rouge">height</code> value on the <code
                                        class="highlighter-rouge">.progress-bar</code>, so if you change that value
                                    the outer <code class="highlighter-rouge">.progress</code> will automatically
                                    resize accordingly.</p>

                                <div class="">
                                    <div class="progress mb-3" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Cardbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated stripes</h4>
                                <p class="card-title-desc">The striped gradient can also be animated. Add <code
                                        class="highlighter-rouge">.progress-bar-animated</code> to <code
                                        class="highlighter-rouge">.progress-bar</code> to animate the stripes right
                                    to left via CSS3 animations.</p>

                                <div class="">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Cardbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Striped</h4>
                                <p class="card-title-desc">Add <code
                                        class="highlighter-rouge">.progress-bar-striped</code> to any <code
                                        class="highlighter-rouge">.progress-bar</code> to apply a stripe via CSS
                                    gradient over the progress bar’s background color.</p>

                                <div class="">
                                    <div class="progress mb-4">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Cardbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!--End Col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Progress</h4>
                                <p class="card-title-desc">Add <code
                                        class="highlighter-rounge">.animated-progess</code> class with <code
                                        class="highlighter-rounge">.progress-bar</code> for animated progressbar.
                                </p>

                                <div class="">
                                    <div class="progress animated-progess mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress animated-progess mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress animated-progess mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress animated-progess">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Carbody-->
                        </div>
                        <!--End Card-->
                    </div>
                    <!--End Col-->
                </div>
                <!--End Row-->

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
        <!-- end main content-->

    </div>
</div>
@endsection