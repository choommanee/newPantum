@extends('public.layout')

@section('title', trans('user::auth.login'))

@section('content')
    <div class="form-wrapper">
        @include('public.partials.notification')
        <div class="col-md-6 detail-login" style="padding-left: 0px;padding-right: 0px;">
            <div class="form form-page" style="padding: 0px;">
                <div class="login form-inner clearfix" style="">
                    <div class="">
                        <div class="top-image" >
                            <img src="http://pt.socail-easy.com/public/storage/media/Fn3hSOh9qobGbU4MCksRNIxe0yoi54A5lyMvi3e1.png" alt="" style="width: 300px;margin: auto auto; display: block;">
                        </div>
                        <h1 class="page-title">Become an PANTUM Member</h1>

                        <div class="signup-btn" style="color:#0a0a0a;">
                            <a style="color: #0a6aa1;" class="ar-bh" href="{{url('register')}}" >
                                <span id="ctl00_ContentPlaceHolder1_lbJoin">Sign Up</span>
                            </a>

                        </div>
                        <div id="" class="">
                            In addition to PANTUM intermittently offering the hottest discounts, news on sales promotions, and the newest information on PANTUM, you will also enjoy having excellent technological support services to promote your experience as a user of our products.
                        </div>
                        <ul class="service-list">
                            <li class="service-item">
                                <img class="service-icon" src="http://pt.socail-easy.com/public/storage/media/sub_button.png">
                                <div class="service-des">
                                    <h2>Personalized Service</h2>
                                    <p>Enjoy the most complete personalized information center, after-sales service, and customer service.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;">
        <div class="form form-page"  style="padding: 0px;">
            <form method="POST" action="{{ route('login.post') }}" class="login-form clearfix">
                {{ csrf_field() }}

                <div class="bg-blue">
                    <div class="reflection"></div>
                </div>

                <div class="login form-inner clearfix">
                    <a href="{{ route('register') }}" class="register" data-toggle="tooltip" data-placement="top" title="{{ trans('user::auth.register') }}" rel="tooltip">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </a>

                    <h3>{{ trans('user::auth.login') }}</h3>

                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        <label for="email">{{ trans('user::auth.email') }}<span>*</span></label>

                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="{{ trans('user::attributes.users.email') }}" autofocus>

                        <div class="input-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>

                        {!! $errors->first('email','<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                        <label for="password">{{ trans('user::auth.password') }}<span>*</span></label>

                        <input type="password" name="password" class="form-control" id="password" placeholder="{{ trans('user::attributes.users.password') }}">

                        <div class="input-icon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>

                        {!! $errors->first('password','<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="clearfix"></div>

                    <button type="submit" class="btn btn-primary btn-center btn-login" data-loading>
                        {{ trans('user::auth.login') }}
                    </button>

                    <div class="checkbox pull-left">
                        <input type="hidden" value="0">
                        <input type="checkbox" value="1" id="remember">

                        <label for="remember">{{ trans('user::auth.remember_me') }}</label>
                    </div>

                    <a href="{{ route('reset') }}" class="forgot-password pull-right">
                        {{ trans('user::auth.forgot_password') }}
                    </a>

                    <div class="social-login-buttons text-center">
                        <div class="social-btn-group" style="display: block;margin-top: 54px;">
                            <hr/>
                            <label>You can use the account and password below to log in directly as an PANTUM Member.</label>
                           {{-- @if (count(app('enabled_social_login_providers')) !== 0)
                                <span>{{ trans('user::auth.or') }}</span>
                            @endif
                            --}}
                            @if (setting('facebook_login_enabled'))
                                <a href="{{ route('login.redirect', ['provider' => 'facebook']) }}" class="btn btn-facebook " >
                                    {{ Theme::image('public/images/facebook.png') }}
                                    {{ trans('user::auth.log_in_with_facebook') }}
                                </a>

                                {{--<div class="fb-login-button" data-size="large" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="true"></div>--}}
                            @endif

                            @if (setting('google_login_enabled'))
                                <a href="{{ route('login.redirect', ['provider' => 'google']) }}" class="btn btn-google ">
                                    {{ Theme::image('public/images/google.png') }}
                                    {{ trans('user::auth.log_in_with_google') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>


        </div>


    </div>
    </div>
@endsection
