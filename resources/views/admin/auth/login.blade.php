@extends('admin.layouts.main')
@section('content')


{{-- <div class="login-main"
    style="background-image: url('{{ asset('assets/admin/images/login.jpg') }}')">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="login-area">


                    <div class="login-wrapper">
                        <div class="login-wrapper__top">
                            <h3 class="title text-white">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                            <p class="text-white">{{ __($pageTitle) }} @lang('to') {{ __($general->site_name) }}
                                @lang('Dashboard')</p>
                        </div>

                        <div class="login-wrapper__body">
                            <form action="{{ route('admin.login') }}" method="POST"
                                class="cmn-form mt-30 verify-gcaptcha login-form">
                                @csrf
                                <div class="form-group">
                                    <label>@lang('Username')</label>
                                    <input type="text" class="form-control" value="{{ old('username') }}" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label>@lang('Password')</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <x-captcha />
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                                    </div>
                                    <a href="{{ route('admin.password.reset') }}"
                                        class="forget-text">@lang('Forgot Password?')</a>
                                </div>
                                <button type="submit" class="btn cmn-btn w-100">@lang('LOGIN')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="col-lg-4 d-block mx-auto">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-md-12">
            <div class="card">
                <form action="{{ route('admin.login') }}" method="POST" class="card-body verify-gcaptcha">
                    @csrf
                    {{-- <div class="text-center mb-6">
                        <img src="{{ asset('assets/images/brand/logo.png') }}" class="" alt="">
                    </div> --}}
                    <h3>{{ __($general->site_name) }} - @lang('Admin Login')</h3>
                    <p class="text-muted">Sign In to your account</p>

                    
                    <div class="input-group mb-3">
                        <span class="input-group-addon bg-white"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-addon bg-white"><i class="fa fa-unlock-alt"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <div class="row">
                        <div class="col-12 mb-5">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check me-3">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                            </div>
                            <a href="{{ route('admin.password.reset') }}" class="btn btn-link box-shadow-0 px-0">@lang('Forgot Password')</a>
                        </div>
                    </div>
                    {{-- <div class="mt-6 btn-list">
                        <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                        <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
                        <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                        <button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
