@extends('layout.blank')

@section('title', 'User Login')

@section('content')
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">

        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column p-10 bgi-no-repeat"
        style="background-size:cover; background-position-x:center; background-image: url({{ asset('pics/lightscreen.jpg') }})">
            <!--begin::Top-->
            <div class="text-right d-flex justify-content-center">
                <div class="top-signin text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                </div>
            </div>
            <!--end::Top-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-row-fluid flex-center">
                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form class="form" id="kt_login_singin_form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <!--begin::Title-->
                        <div class="pt-12 pb-lg-15 text-center">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg text-center">Sign In</h3>

                            <a href="{{ route('password.request') }}"
                                class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5 ">Forgot
                            Password ?</a>
                            <div>
                            <a href="{{ route('admin.login') }}"
                                class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5 ">Admin ?</a>
                            </div>
                            <!-- <div class="text-muted font-weight-bold font-size-h4 text-center">New Here?
                                <a href="{{ route('register') }}" class="text-primary font-weight-bolder">Create
                                    Account</a></div> -->
                        </div>
                        <!--begin::Title-->
                        <!-- <p class="text-muted font-weight-bold font-size-h6">
                            Login demo: <br />
                            Email: <span class="text-primary">hi@hiskia.app</span> <br />
                            Password: <span class="text-primary">123456</span>
                        </p> -->
                        <!--begin::Form group-->
                        <div class="form-group text-center">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input
                                class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" placeholder="rifky@gmail.com" autocomplete="off" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group text-center">

                            <label class="font-size-h6 font-weight-bolder text-dark pt-1">Your Password</label>

                            <input
                                class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                                type="password" name="password" placeholder="12345678" autocomplete="off" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-7 text-center">
                            <button type="submit" id="kt_login_singin_form_submit_button"
                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-2 my-3 mr-3">Sign
                                In</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
@endsection

@section('styles')
<link href="{{ asset('css/pages/login/login-3.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script src="{{ asset('js/pages/user/auth.js') }}"></script>
@endsection
