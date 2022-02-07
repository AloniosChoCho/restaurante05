@extends('backend.layouts.app-login')
@section('title')
    Login
@endsection
@section('content')
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">


            <div class="auth-logo">
                <h3 class="text-center">
                    <a href=#javascript class="logo d-block my-4">
                        <img src="{{ asset ('backend/images/logo-dark.png') }} " class="logo-dark mx-auto" height="30" alt="logo-dark">
                        <img src="{{ asset ('backend/images/logo-light.png') }} " class="logo-light mx-auto" height="30" alt="logo-light">
                    </a>
                </h3>
            </div>

            <div class="p-3">
                <h4 class="text-muted font-size-18 text-center">Welcome Back !</h4>
                <p class="text-muted text-center">Sign in to continue to Agroxa.</p>

                <form class="form-horizontal" action="{{ route('login') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                         <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Enter E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                    </div>



                    {{-- <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="mb-3">

                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                <label class="form-check-label" for="customControlInline">Remember
                                    me</label>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary w-md waves-effect waves-light">
                                {{ __('Log In') }}
                            </button>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12">
                            <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                                password?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="text-center">
        <p class="text-white-50">Don't have an account ? <a href="#" class="text-white"> Signup Now
            </a> </p>
        <p class="text-muted">
            ©
            <script>document.write(new Date().getFullYear())</script> Agroxa. Crafted with <i
                class="mdi mdi-heart text-primary"></i> by
            Themesbrand
        </p>
    </div>

</div>
@endsection
