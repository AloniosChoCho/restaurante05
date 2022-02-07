@extends('backend.layouts.app2')
@section('title')
    Modals
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
                            <h4 class="mb-0 font-size-18">Modals</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Modals</li>
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

            <!-- Start Page-content-wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Modals Examples</h4>
                                <p class="card-title-desc">Modals are streamlined, but flexible dialog prompts
                                    powered by JavaScript. They support a number of use cases from user notification
                                    to completely custom content and feature a handful of helpful subcomponents,
                                    sizes, and more.</p>

                                <div class="modal bs-example-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content shadow-lg">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>One fine body&hellip;</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <div class="row">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Standard Modal</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                                data-bs-target="#myModal">Standard
                                                modal</button>
                                        </div>

                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel">Modal Heading
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="font-size-16">Overflowing text to show scroll
                                                            behavior</h5>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Extra large Modal</p>
                                            <!-- Extra Large modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra
                                                large
                                                modal</button>
                                        </div>

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myExtraLargeModalLabel">
                                                            Extra large modal</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Large Modal</p>
                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large
                                                modal</button>
                                        </div>

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myLargeModalLabel">Large
                                                            modal</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Small Modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small
                                                modal</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="mySmallModalLabel">Small
                                                            modal</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Center Modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal"
                                                data-bs-target=".bs-example-modal-center">Center
                                                modal</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Center modal</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                            consectetur. Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur et. Donec sed odio dui.
                                                            Donec ullamcorper nulla non metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Scrollable Modal</p>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModalScrollable">Scrollable
                                                modal</button>
                                        </div>

                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="exampleModalScrollableTitle">
                                                            Scrollable Modal</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">static backdrop
                                                Modal</p>
                                            <!-- Satic modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Static backdrop modal
                                            </button>
                                        </div>

                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        I will not close if you click outside me. Don't even try to
                                                        press escape key.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary">Understood</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="my-4 text-center">
                                            <p class="text-muted">Full Screen Modal</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#fullscreenModal">Fullscreen
                                                modal</button>
                                        </div>

                                        <!-- sample modal content -->
                                        <div id="fullscreenModal" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel1">Modal
                                                            Heading
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                       
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                            justo odio, dapibus ac facilisis in, egestas eget quam.
                                                            Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                            eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur
                                                            et. Donec sed odio dui. Donec ullamcorper nulla non
                                                            metus auctor fringilla.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
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
            <!-- End Page-Content-Wrapper -->

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