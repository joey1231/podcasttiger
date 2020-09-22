

@extends('layouts.auth')

@section('content')
    <!--begin::Login-->
<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="login-aside d-flex flex-column flex-row-auto">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <!--begin::Aside Header-->
            <a href="https://www.podcasthawk.com" class="login-logo text-center pt-lg-25 pb-10"  title="Podcast Hawk - homepage">
                            <img src="https://podcasthawk.com/wp-content/uploads/2020/07/podcast-hawk-logo-2x.png" class="max-h-150px" alt="Podcast Hawk - Logo"/>
                        </a>
            <!--end::Aside Header-->

            <!--begin::Aside Title-->
            <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50  line-height-xl">
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

    <!--begin::Content-->
    <div class="login-content flex-column-fluid d-flex flex-column p-10">
        <!--begin::Top-->
        <div class="text-right d-flex justify-content-center">
            <div class="top-forgot text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
                <a href="https://podcasthawk.com/contact/" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
            </div>
        </div>
        <!--end::Top-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-row-fluid flex-center">
            <!--begin::Forgot-->
            <div class="login-form">
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <!--begin::Form-->
                <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <!--end::Form-->
            </div>
            <!--end::Forgot-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
</div>
<!--end::Login-->
@endsection
