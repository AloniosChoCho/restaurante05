@extends('backend.layouts.app2')
@section('title')
    Badge
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Badge</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Badge</li>
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

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Example</h4>
                                <p class="card-title-desc">Badges scale to match the size of the
                                    immediate parent element by using relative font sizing and <code
                                        class="highlighter-rouge">em</code> units.</p>

                                <div class="">
                                    <h1>Example heading <span class="badge bg-light">New</span></h1>
                                    <h2>Example heading <span class="badge bg-light">New</span></h2>
                                    <h3>Example heading <span class="badge bg-light">New</span></h3>
                                    <h4>Example heading <span class="badge bg-light">New</span></h4>
                                    <h5>Example heading <span class="badge bg-light">New</span></h5>
                                    <h6>Example heading <span class="badge bg-light">New</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Variations</h4>
                                <p class="card-title-desc">Add any of the below mentioned modifier
                                    classes to change the appearance of a badge.</p>

                                <div>
                                    <span class="badge bg-primary">Primary</span>
                                    <span class="badge bg-secondary">Secondary</span>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-danger">Danger</span>
                                    <span class="badge bg-warning text-dark">Warning</span>
                                    <span class="badge bg-info text-dark">Info</span>
                                    <span class="badge bg-light text-dark">Light</span>
                                    <span class="badge bg-dark text-light">Dark</span>
                                </div>

                                <p class="card-title-desc mt-4">Use the <code
                                        class="highlighter-rouge">.rounded-pill</code>
                                    modifier class to make
                                    badges more rounded (with a larger <code
                                        class="highlighter-rouge">border-radius</code>
                                    and additional horizontal <code class="highlighter-rouge">padding</code>).
                                    Useful if you miss the badges from v3.</p>

                                <div>
                                    <span class="badge rounded-pill bg-primary">Primary</span>
                                    <span class="badge rounded-pill bg-secondary">Secondary</span>
                                    <span class="badge rounded-pill bg-success">Success</span>
                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                    <span class="badge rounded-pill bg-warning text-dark">Warning</span>
                                    <span class="badge rounded-pill bg-info text-dark">Info</span>
                                    <span class="badge rounded-pill bg-light text-dark">Light</span>
                                    <span class="badge rounded-pill bg-dark text-light">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
    </div>


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