<!DOCTYPE html>
<!--
Author: Hưng Nguyễn
Website: http://www.hungnm144.com
Contact: hungnm144@gmail.com
Telephone: +84 98 206 1616
License: You are not allowed to use this product without consent from the author for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8">
    <title>ADMIN CONTROL PANEL</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Admin Control Panel" name="description">
    <meta content="Hưng Nguyễn" name="author">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!--begin::Web font -->
    <link href="/backend/fonts/poppins/font.css" rel="stylesheet" type="text/css" />
    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="/backend/plugins/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="/backend/js/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="/backend/img/logo/favicon.ico" />
</head>

<!-- end::Head -->
<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(/backend/img//bg/bg-2.jpg);">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="/">
                        <img src="/backend/img/logos/logo-1.png">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">{{__('Sign in')}}</h3>
                    </div>
                    <form id="sign-in-form" class="m-login__form m-form" action="{{route('post_admin_login_form')}}" method="post">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember"> {{__('Remember me')}}
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link">{{__('Forget password')}}?</a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">{{__('Sign in')}}</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">{{__('Sign up')}}?</h3>
                        <div class="m-login__desc">Enter your details to create your account:</div>
                    </div>
                    <form id="sign-up-form" class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
                        </div>
                        <div class="row form-group m-form__group m-login__form-sub">
                            <div class="col m--align-left">
                                <label class="m-checkbox m-checkbox--light">
                                    <input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
                                    <span></span>
                                </label>
                                <span class="m-form__help"></span>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign Up</button>&nbsp;&nbsp;
                            <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">{{__('Cancel')}}?</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">{{__('Forgotten password')}}?</h3>
                        <div class="m-login__desc">Enter your email to reset your password:</div>
                    </div>
                    <form id="forget-password-form" class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
                    <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin:: Global Mandatory Vendors -->
<script src="/backend/plugins/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="/backend/plugins/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="/backend/plugins/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/backend/plugins/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="/backend/plugins/moment/min/moment.min.js" type="text/javascript"></script>
<script src="/backend/plugins/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="/backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="/backend/plugins/wnumb/wNumb.js" type="text/javascript"></script>
<script src="/backend/plugins/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="/backend/plugins/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="/backend/plugins/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="/backend/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="/backend/plugins/jquery-validation/dist/additional-methods.min.js" type="text/javascript"></script>
@if(app()->getLocale() !== 'en-US')
    <script src="/backend/plugins/jquery-validation/dist/localization/messages_{{ app()->getLocale() }}.min.js"></script>
@endif
<script src="/backend/plugins/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle -->
<script src="/backend/js/base/scripts.bundle.min.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Global Theme Bundle -->
<script src="/backend/js/base/form.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="/backend/js/snippets/authentication/login.js" type="text/javascript"></script>
<!--end::Page Scripts -->

</body>
<!-- end::Body -->

</html>