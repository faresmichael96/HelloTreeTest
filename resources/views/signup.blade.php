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
                    <button class="switch_buttons border_radius bg-white" data-type="login">Sign in</button>
                    <button class="switch_buttons border_radius bg-white active" data-type="register">Sign up</button>
                </div>
                <div class="form_wrapper login_container" data-type="login">
                    <form id="login_form">
                        <div class="form-group">
                            <input type="email" class="form-control border_radius" placeholder="Email address" id="login_email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border_radius" placeholder="Password" id="login_password">
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                        </div>
                        <div class="form-group forget_password">
                            <a href="#" class="border_radius"><ins>I forgot my password</ins></a>
                        </div>
                        <div class="form-group">
                            <a href="#" class="login_btn border_radius text-white">Sign in</a>
                            <i class="bi bi-arrow-right-short right_arrow"></i>
                        </div>
                    </form>
                    <div class="sm_account">
                        <h2>Or sign in using</h2>
                        <div class="actions">
                            <a href="#" class="sm_account_link border_radius text-white" id="facebook_link"><img src="/assets/images/facebook_icon.png" class="mr-4" width="13px" height="auto" alt="Facebook"/> Facebook</a>
                            <a href="#" class="sm_account_link border_radius mb-0 text-white" id="google_link"><img src="/assets/images/google_icon.png" class="mr-4" width="24px" height="25px" alt="Google"/> Google</a>
                        </div>
                    </div>
                </div>
                <div class="form_wrapper register_container active" data-type="register">
                    <form id="register_form">
                        <div class="user_type position-relative mb-4">
                            <h2 class="mb-3">What type of user are you?</h2>
                            <div class="wrapper d-flex flex-row">
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input active" id="public" name="public" value="1" checked="checked">
                                        <label class="custom-control-label" for="public">Public</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="service_provider" name="service_provider" value="2">
                                        <label class="custom-control-label" for="service_provider">Service Provider</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                                <div class="col custom-control custom-radio mr-0 pl-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="funder" name="funder" value="3">
                                        <label class="custom-control-label" for="funder">Funder</label>
                                        <a href="#" class="d-flex mb-0 mt-1 details">
                                            <span class="text-white d-inline-block align-middle mr-1">?</span>More details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border_radius" placeholder="Name" id="name">
                        </div>
                        <div class="form-group company">
                            <input type="text" class="form-control border_radius" placeholder="Company Name" id="company_name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border_radius" placeholder="Email address" id="register_email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border_radius" placeholder="Phone number" id="phone_number">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border_radius" placeholder="Password" id="register_password">
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border_radius" placeholder="Confirm Password" id="confirm_password">
                            <i class="bi bi-eye-slash-fill toggle_password"></i>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input ml-0" id="terms_and_confitions" name="terms_and_confitions" required>
                            <label class="custom-control-label mb-0 ml-1 terms_conditions" for="terms_and_confitions">I have read and accept the <a href="#" class="text-decoration-none"> terms & conditions</a></label>
                        </div>
                        <div class="form-group mb-0">
                            <a href="#" class="login_btn border_radius text-white">Sign in</a>
                            <i class="bi bi-arrow-right-short right_arrow"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<div class="tooltip-inner position-absolute tooltip_text">
                                        <h3 class="display-3 mb-3">Public user</h3>
                                        <p class="mb-0">You are a public user when you are an individual who is looking for a quality service provider. Create your account, submit your request and just for the magic to happen.</p>
                                    </div>--}}