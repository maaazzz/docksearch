@extends('front-end.layouts.master')

@section('title','DockSearch Login')

@section('styles')
    <style>
        select {
            width: 100%;
    height: 3.4375rem;
    font-family: Jost;
    font-size: .9375rem;
    color: #999;
    border: 1px solid #fff;
    margin-bottom: 1.25rem;
    padding: 13px 1.875rem;
    background-color: #fff
        }

    </style>
@endsection
@section('content')
<section>
    <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
        <div class="fixed-bg" style="background-image: url({{ asset('front-end') }}/assets/images/pg-tp-bg.jpg);"></div>
        <div class="container">
            <div class="pg-tp-wrp text-center w-100">
                <h1 class="mb-0">Login & Register</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html" title="Home">Home</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 gray-bg position-relative">
        <div class="login-register-wrap w-100">
            <div class="row mrg align-items-center">
                <div class="col-md-12 col-sm-12 col-lg-5">
                    <div class="login-wrap w-100 position-relative" style="background-image: url({{ asset('front-end') }}/assets/images/login-bg.jpg);">
                        <div class="login-inner">
                            <div class="title2 w-100">
                                <h2 class="mb-0">Login your Account</h2>
                                <p class="mb-0">Login to your account to discovery all great features in this template.</p>
                            </div>
                            <form class="w-100" action="{{ route('login') }}" method="post">
                                @csrf
                                <input class="rounded-pill" name="email" type="text" placeholder="Your Email" value="{{ old('email') }}">
                                <input class="rounded-pill" type="password" placeholder="Password" name="password" value="">
                                <div class="kep-forget-pas d-flex flex-wrap justify-content-between align-items-center">
                                    <span class="check-box"><input type="checkbox" id="keep-login" name="remember" value="{{ old('remember') }}"><label for="keep-login">Keep me logged in</label></span>
                                    <a href="{{ route('password.request') }}" title="">Forgot your Password?</a>
                                </div>
                                <button class="thm-btn brd-btn rounded-pill" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-7">
                    <div class="register-wrap w-100">
                        <div class="register-inner">
                            <div class="title2 w-100">
                                <h2 class="mb-0">Don't have an Account? Register Now</h2>
                                <p class="mb-0">By creating an account with our store, you will be able to move through the checkout process faster,store multiple shipping addresses.</p>
                            </div>
                            <form class="w-100" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-4 col-lg-6">
                                        <select name="title"  class="rounded-pill">
                                            <option value="" selected disabled>Title</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mr's">Mr's</option>
                                            <option value="Ms">Ms</option>
                                        </select>
                                        @error('title')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                         @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" class="rounded-pill" name="first_name" placeholder="First Name"
                                        required="required" value="{{ old('first_name') }}">
                                        @error('first_name')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                      @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" class="rounded-pill" name="last_name" placeholder="Last Name"
                                        required="required" value="{{ old('last_name') }}">
                                        @error('last_name')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="email" class="rounded-pill" name="email" placeholder="Email" required="required" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="password" class="rounded-pill" name="password" placeholder="Password"
                                        required="required">
                                         @error('password')
                                            <span class="error" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="password" class="rounded-pill" name="password_confirmation"
                                        placeholder="Confirm Password" required="required">
                                         @error('password_confirmation')
                                            <span class="error" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <select name="country"  class="rounded-pill">
                                            <option value="" selected disabled>Select Country</option>
                                            <option value="US">US</option>
                                            <option value="UK">UK</option>
                                            <option value="Pak">Pakistan</option>
                                        </select>
                                        @error('country')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                                        <select name="dock_type"  class="rounded-pill">
                                            <option value="" selected disabled>Select Dock Type</option>
                                            <option value="1">Dock For Rent</option>
                                            <option value="2">Dock For Sale</option>
                                        </select>
                                        @error('dock_type')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div> --}}
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" class="rounded-pill" name="postal_code" placeholder="Postal Code" value="{{ old('postal_code') }}">
                                        @error('postal_code')
                                        <span class="error" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="date" name="date_of_birth"  class="form-control ml-1">
                                            @error('date_of_birth')
                                            <span class="error" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button class="thm-btn rounded-pill" type="submit">Register Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Login Register Wrap -->
    </div>
</section>
@endsection
