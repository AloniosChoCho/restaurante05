@extends('backend.layouts.app2')
@section('title')
    Cards   
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
                            <h4 class="mb-0 font-size-18">Cards</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Cards</li>
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
                    <div class="col-md-6 col-xl-3">

                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-1.jpg') }} "
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End col -->

                    <div class="col-md-6 col-xl-3">

                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-2.jpg') }} "
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody-->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End col -->

                    <div class="col-md-6 col-xl-3">

                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-3.jpg') }} "
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End col -->

                    <div class="col-md-6 col-xl-3">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <h6 class="card-subtitle font-size-14 text-muted">Support card subtitle</h6>
                            </div>

                            <img class="img-fluid" src="{{ asset ('backend/images/small/img-4.jpg') }} " alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card card-body text-center">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card card-body text-end">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                        </div>
                    </div>
                    <!-- End Cardbody -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <h4 class="card-header">Featured</h4>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                Quote
                            </div>
                            <div class="card-body">
                                <blockquote class="card-blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                        a ante.</p>
                                    <footer class="blockquote-footer font-size-12 mt-3 mb-0">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                            </div>
                            <!-- End Cardbody -->
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-5.jpg') }} "
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <!-- End Cardbody -->
                            <img class="card-img-bottom img-fluid" src="{{ asset ('backend/images/small/img-7.jpg') }} "
                                alt="Card image cap">
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img img-fluid" src="{{ asset ('backend/images/small/img-6.jpg') }} " alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title text-white">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img class="card-img img-fluid" src="{{ asset ('backend/images/small/img-2.jpg') }} "
                                        alt="Card image">
                                </div>
                                <!-- End Col -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Col -->
                                <div class="col-md-4">
                                    <img class="card-img img-fluid" src="{{ asset ('backend/images/small/img-3.jpg') }} "
                                        alt="Card image">
                                </div>
                                <!-- End Col -->

                            </div>
                            <!-- End Row-->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-primary text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="mdi mdi-bullseye-arrow me-3"></i>
                                    Primary
                                    Card</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card bg-success text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="mdi mdi-check-all me-3"></i> Success
                                    Card
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card bg-info text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline"></i>Info
                                    Card</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-warning text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="mdi mdi-alert-outline me-3"></i>Warning
                                    Card</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card bg-danger text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="mdi mdi-block-helper me-3"></i>Danger
                                    Card</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-4">
                        <div class="card bg-dark text-light">
                            <div class="card-body">
                                <h5 class="mb-4 text-light"><i
                                        class="mdi mdi-alert-circle-outline me-3"></i>Dark Card</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
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
                        <h4 class="my-3">Card Groups</h4>
                        <div class="card-deck-wrapper">
                            <div class="card-group gap-4">
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-4.jpg') }} "
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->

                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-5.jpg') }} "
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This card has supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->

                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="{{ asset ('backend/images/small/img-6.jpg') }} "
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This card has even longer content
                                            than the first to show that equal height action.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Cardgroup -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="my-3">Cards Masonry</h4>
                        <div class="row" data-masonry='{"percentPosition": true }'>

                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="{{ asset ('backend/images/small/img-3.jpg') }} " class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title that wraps to a new line</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="{{ asset ('backend/images/small/img-3.jpg') }} " class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.
                                        </p>
                                        <small class="text-muted">Last updated 3 mins
                                            ago</small>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="{{ asset ('backend/images/small/img-7.jpg') }} " class="card-img-top" alt="...">
                                </div>
                                <div class="card p-3 text-end">
                                    <blockquote class="blockquote blockquote-reverse font-size-16 mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                            erat
                                            a ante.</p>
                                        <footer class="blockquote-footer mb-0 mt-2">
                                            <small class="text-muted">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                    </blockquote>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="card-blockquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                posuere
                                                erat a ante.</p>
                                            <footer class="blockquote-footer font-size-12  mb-0 mt-2">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card-->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card bg-primary text-white text-center p-3">
                                    <blockquote class="card-blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                            erat.</p>
                                        <footer class="blockquote-footer text-white font-size-12 mb-0 mt-2">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card">

                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is another card with title and supporting text
                                            below.
                                            This card has some additional content to make it slightly taller
                                            overall.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->



                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is another card with title and supporting text
                                            below.
                                            This card has some additional content to make it slightly taller
                                            overall.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has a regular title and short paragraphy of
                                            text
                                            below it.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Cardbody-->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row-->

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
    <!-- end main content-->

</div>
@endsection