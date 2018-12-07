@extends('layout.layout')
@section('title')
    Workbank CRM Login
@endsection

@section('page-heading')
     Workbank CRM Login
@endsection




@include('show-message')
@section('content')

<div class="user-login-page log-pop emp-pop footer-white">
    <div class="modal-dialog">
        <div class="pop-body popup-cover login-port active">
            <div class="outer-block">
                <h2 class="blue-bar"><span><svg><use xlink:href="#login-icon"></use></svg></span>Workbank CRM Login</h2>
                <div class="form-part">
                    
                    <form class="login_sec" method="POST" id="signin_form">
                        {{csrf_field()}}
                        <div class="box-form">
                            <input type="email" name="email" class="b-post" id="email1" placeholder="Email" required autocomplete="off"/>
                        </div>
                        <div class="box-form">
                            <input type="password" name="password" id="password" class="b-post" placeholder="Password" required autocomplete="off"/>
                        </div>
                        <div class="signed verified clearfix">
							@if(Session::get('login_counter') >4)
								{!! App('captcha')->display() !!}
							@endif
							<label id="captcha-error" class="error" style="top:-15px"></label>
							<br>
                            <label class="checkbox">
                                <input type="checkbox" class="subs-agree" id="js-admin-keep-signed"> <!--don't change this id-->
                                <label for="js-admin-keep-signed">Keep me signed in</label>
                            </label>
                            <div class="pwd-new">
                                <a href="{{site_url('forgot-password')}}" class="pass-chng">Forgot password?</a>
                            </div>
                        </div>
                        <div class="clearfix" style="text-align: center;">
                            <button type="submit" class="pop-btn lf-btn signin rm-float" id="signin_submit">Login</button>
                        </div>
                        <input type="hidden" value="{{$red_auth_url}}" name="red_auth_url">
                        <input type="hidden" value="{{$app}}" name="app">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
