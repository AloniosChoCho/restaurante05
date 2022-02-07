@extends('backend.layouts.app2')
@section('title')
    Email Compose
@endsection
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Email Compose</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email Compose</a></li>
                                <li class="breadcrumb-item active">Email Compose</li>
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
                    <div class="col-12">
                        <div class="email-leftbar card">
                            <a href="{{ route('Compose') }}"  class="btn btn-info  waves-effect waves-light">Compose</a>
                           
                            <div class="mail-list mt-4">
                                <a href="#" class="active">Inbox <span class="ms-1">(18)</span></a>
                                <a href="#">Starred</a>
                                <a href="#">Important</a>
                                <a href="#">Draft</a>
                                <a href="#">Sent Mail</a>
                                <a href="#">Trash</a>
                            </div>

                            <h6 class="mt-4">Labels</h6>

                            <div class="mail-list mt-1">
                                <a href="#"><span
                                        class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme
                                    Support</a>
                                <a href="#"><span
                                        class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                                <a href="#"><span
                                        class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                                <a href="#"><span
                                        class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                                <a href="#"><span
                                        class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                            </div>

                            <h6 class="mt-4">Chat</h6>

                            <div class="mt-2">
                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-2.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Scott Median</p>
                                        <p class="text-muted">Hello</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-3.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Julian Rosa</p>
                                        <p class="text-muted">What about our next..</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-4.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">David Medina</p>
                                        <p class="text-muted">Yeah everything is fine</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-6.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Jay Baker</p>
                                        <p class="text-muted">Wow that's great</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="email-rightbar mb-3">

                            <div class="card">
                                <div class="card-body">

                                    <div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="To">
                                        </div>
    
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <form method="post">
                                                <textarea id="email-editor" name="area"></textarea>
                                            </form>
                                        </div>

                                        <div class="btn-toolbar mb-0">
                                            <div class="">
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-save"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-trash-alt"></i></button>
                                                <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
                                            </div>
                                        </div>

                                    </div>

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
</div>
@endsection

@section('text')
<script src="{{ asset ('backend/libs/tinymce/tinymce.min.js') }} "></script>
<script src="{{ asset ('backend/js/pages/email-editor.init.js') }} "></script>
@endsection