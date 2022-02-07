@extends('backend.layouts.app2')
@section('title')
Popover & Tooltips
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
                            <h4 class="mb-0 font-size-18">Popover & Tooltips</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Popover & Tooltips</li>
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

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Popovers</h4>
                                <p class="card-title-desc">Add small overlay content, like those found in iOS,
                                    to
                                    any element for housing secondary information.</p>

                                <div class="button-items" id="popover-container">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-container="#popover-container" data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-container="#popover-container" data-bs-toggle="popover"
                                        data-bs-placement="right"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-container="#popover-container" data-bs-toggle="popover"
                                        data-bs-placement="bottom"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-container="#popover-container" data-bs-toggle="popover"
                                        data-bs-placement="left" title="Popover Title"
                                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>

                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover"
                                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                                        popover</button>

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Tooltips</h4>
                                <p class="card-title-desc">Hover over the links below to see tooltips:</p>

                                <div class="button-items" id="tooltip-container">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-container="#tooltip-container"
                                        title="Tooltip on top">
                                        Tooltip on top
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" data-bs-container="#tooltip-container"
                                        title="Tooltip on right">
                                        Tooltip on right
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-container="#tooltip-container"
                                        title="Tooltip on bottom">
                                        Tooltip on bottom
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-container="#tooltip-container"
                                        title="Tooltip on left">
                                        Tooltip on left
                                    </button>
                                </div>
                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->

            </div>
            <!-- End page content wrapper-->

        </div>
        <!-- container-fluid -->
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