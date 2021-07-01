@extends('layouts.template')

@section('page_title', 'Sign up')

@section('content')
    <div class="container-fluid my-auto bg-image" style="background: url('/assets/images/signup_backgroundImage.jpg')no-repeat top center; background-size: cover; height:auto">
        <div class="row">
            <div class="col-xl-7 col-lg-6 pt-5 pl-5 description">
                <a href="/" class="d-inline-flex mb-5">
                    <img class="img-fluid" src="/assets/images/naaam_logo.png" width="90px" height="auto" alt="Naaam logo"/>
                </a>
                <h1 class="display-1 text-white mb-3 mt-5">Quality, proximity & responsibility.</h1>
                <p class="text-white mb-0">These are the core values of our journey.</p>
                <p class="text-white mb-0">We believe in delivering on our promises.</p>
            </div>
            <div class="col-xl-5 col-lg-6 bg-white border-radius-width-25 form_padding form_container">
                <button type="button" class="close" aria-label="Close">
                    <img src="/assets/images/close_icon.png" alt="close icon"/>
                </button>
                <div class="form_switch border_radius">
                    <button class="switch_buttons border_radius bg-white active" data-type="login">Sign in</button>
                    <button class="switch_buttons border_radius bg-white" data-type="register">Sign up</button>
                </div>
                <div class="form_wrapper login_container active" data-type="login">
                    <form id="login_form" method="post" action="/login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control border_radius" placeholder="Email address" id="login_email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control border_radius" placeholder="Password" id="login_password" name="password" required>
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                        </div>
                        @if(Session::has('login_error'))
                            <div class="error mb-2 text-danger">{{Session::get('login_error')}}</div>
                        @endif
                        <div class="form-group forget_password">
                            <a href="#" class="border_radius"><ins>I forgot my password</ins></a>
                        </div>
                        <div class="form-group">
                            <button class="login_btn btn-block border_radius text-white">Sign in</button>
                            <i class="bi bi-arrow-right-short right_arrow"></i>
                        </div>
                    </form>
                    <div class="sm_account">
                        <h2>Or sign in using</h2>
                        <div class="actions">
                            <a href="{{route('social.oauth', 'facebook')}}" class="sm_account_link border_radius text-white" id="facebook_link"><img src="/assets/images/facebook_icon.png" class="mr-4" width="13px" height="auto" alt="Facebook"/> Facebook</a>
                            <a href="{{route('social.oauth', 'google')}}" class="sm_account_link border_radius mb-0 text-white" id="google_link"><img src="/assets/images/google_icon.png" class="mr-4" width="24px" height="25px" alt="Google"/> Google</a>
                        </div>
                        @if(Session::has('socialite_login_error'))
                            <div class="error mt-3 text-danger">{{Session::get('socialite_login_error')}}</div>
                        @endif
                    </div>
                </div>
                <div class="form_wrapper register_container" data-type="register">
                    <form id="register_form" method="post" action="/register">
                        {{ csrf_field() }}
                        <div class="user_type position-relative mb-4">
                            <h2 class="mb-3">What type of user are you?</h2>
                            <div class="wrapper d-flex flex-row">
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input active" id="public" name="user_type_id" value="1" checked="checked">
                                        <label class="custom-control-label" for="public">Public</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="service_provider" name="user_type_id" value="2">
                                        <label class="custom-control-label" for="service_provider">Service Provider</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="funder" name="user_type_id" value="3">
                                        <label class="custom-control-label" for="funder">Funder</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border_radius @if($errors->has('name')) border-danger @endif" placeholder="Name" id="name" name="name" required>
                            @if($errors->has('name'))
                                <div class="error mt-1 text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group company">
                            <input type="text" class="form-control border_radius @if($errors->has('company_name')) border-danger @endif" placeholder="Company Name" id="company_name" name="company_name">
                            @if($errors->has('company_name'))
                                <div class="error mt-1 text-danger">{{ $errors->first('company_name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border_radius @if($errors->has('email')) border-danger @endif" placeholder="Email address" id="register_email" name="email" required>
                            @if($errors->has('email'))
                                <div class="error mt-1 text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border_radius @if($errors->has('phone_number')) border-danger @endif" placeholder="Phone number" id="phone_number" name="phone_number" required>
                            @if($errors->has('phone_number'))
                                <div class="error mt-1 text-danger">{{ $errors->first('phone_number') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border_radius @if($errors->has('password')) border-danger @endif" placeholder="Password" id="register_password" name="password" required>
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                            @if($errors->has('password'))
                                <div class="error mt-1 text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border_radius @if($errors->has('confirm_password')) border-danger @endif" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                            @if($errors->has('confirm_password'))
                                <div class="error mt-1 text-danger">{{ $errors->first('confirm_password') }}</div>
                            @endif
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input ml-0" id="terms_and_confitions" name="terms_and_confitions" required>
                            <label class="custom-control-label mb-0 ml-1 terms_conditions" for="terms_and_confitions">I have read and accept the <a href="#" class="text-decoration-none"> terms & conditions</a></label>
                        </div>
                        <div class="form-group mb-0">
                            <button class="register-btn btn-block border_radius text-white">Create my account</button>
                            <i class="bi bi-arrow-right-short right_arrow"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('register'))
        <script type="text/javascript">
            $(document).ready(function(){
                $('.form_switch button[data-type="login"]').removeClass('active');
                $('.form_wrapper[data-type="login"]').removeClass("active");
                $('.form_switch button[data-type=register]').addClass('active');
                $('.form_wrapper[data-type=register]').addClass('active');
            });
        </script>
    @endif
@endsection