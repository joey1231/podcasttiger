
@extends('layouts.auth')

@section('content')
<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid" >
    <!--begin::Aside-->
    <div class="login-aside d-flex flex-column flex-row-auto">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <!--begin::Aside header-->
            <a href="https://www.podcasthawk.com" class="login-logo text-center pt-lg-25 pb-10" title="Podcast Hawk - homepage">
                            <img src="https://podcasthawk.com/wp-content/uploads/2020/07/podcast-hawk-logo-2x.png" class="max-h-150px" alt="Podcast Hawk - logo"/>
                        </a>
            <!--end::Aside header-->

            <!--begin::Aside Title-->
            <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">
                Let's get booked for<br/>
                interviews on podcasts.
            </h3>
            <!--end::Aside Title-->
        </div>
        <!--end::Aside Top-->

        <!--begin::Aside Bottom-->
        <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center"
            style="background-position-y: calc(100% + 5rem); background-image: url(https://user.podcasthawk.com/assets/media/svg/illustrations/login-visual-5.svg)">
        </div>
        <!--end::Aside Bottom-->
    </div>
    <!--begin::Aside-->
    <diiv class="login-content flex-row-fluid d-flex flex-column p-10">
        <!--begin::Top-->
        <div class="text-right d-flex justify-content-center">
            <div class="top-signin text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
                <a href="https://podcasthawk.com/contact/" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Contact Us</a>
            </div>
        </div>
        <!--end::Top-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-row-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form">
                <!--begin::Form-->
                <form class="form" id="kt_login_singin_form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <!--begin::Title-->
                    <div class="pb-5 pb-lg-15">
                        <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                        <div class="text-muted font-weight-bold font-size-h4">
                            New Here?
                            <a href="{{ route('register') }}" class="text-primary font-weight-bolder">Create Account</a>
                        </div>
                    </div>
                    <!--begin::Title-->

                    <!--begin::Form group-->
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                        <input class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group">
                        <div class="d-flex justify-content-between mt-n5">
                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Name</label>

                            <a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">
                                Forgot Password ?
                            </a>
                        </div>
                        <input class="form-control h-auto py-7 px-6 rounded-lg border-0  @error('password') is-invalid @enderror" name="password" type='password' required autocomplete="current-password"/>
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <!--end::Form group-->

                    <!--begin::Action-->
                    <div class="pb-lg-0 pb-5">
                        <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>

                    </div>
                    <!--end::Action-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Wrapper-->
    </div>

</div>


@endsection
