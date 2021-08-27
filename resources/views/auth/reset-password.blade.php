@extends('layouts.guest')

@section('title', 'Reset Password')

@section('guest-content')
    <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo34@2x.jpg') }}');">
        <div class="row mx-0 bg-earth-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white mb-5">
                        We're very happy you are joining our community!
                    </p>
                    <p class="font-size-h5 text-white">
                        <i class="fa fa-angles-right"></i> Create your account today and receive 50% off.
                    </p>
                    <p class="font-italic text-white-op">
                        Copyright &copy; <span class="js-year-copy"></span>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                <div class="content content-full">

                    <!-- Header -->
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                        </a>
                        <h1 class="h3 font-w700 mt-30 mb-10">Reset Password</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <form class="js-validation-signup px-30" action="{{ route('password.update') }}" method="post">
                        @csrf
                        <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        value="{{ $email ?? old('email') }}"
                                        required
                                       >
                                    <label for="email">{{ __('Email') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"
                                        name="password"
                                        required>
                                    <label for="password">{{ __('Password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        required>
                                    <label for="password_confirmation">{{__('Password Confirmation')}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                <i class="fa fa-plus mr-10"></i>  {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                    <!-- END Sign Up Form -->
                </div>
            </div>
        </div>
    </div>
@endsection

