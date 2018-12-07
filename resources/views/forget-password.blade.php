@extends('layout.layout')

@push('css')
@endpush

@section('title')
   Forgot Passoword
@endsection

@section('page-heading')
    Forgot Passoword
@endsection

@section('content')
    <div class="user-login-page log-pop footer-white">
        <div class="modal-dialog">
            <div class="pop-body popup-cover password-port active">
                <div class="outer-block">
                    @include('show-message')
                    <h2 class="blue-bar">Reset Password</h2>
                    <p class="warn-txt">Enter your email address below and we will send you a reset password link.</p>
                    <div class="form-part">
                        <form class="login_sec" method="POST" action ="{{site_url('forgot-password/send-verification-code')}}" id="js-forgot-pwd-form" novalidate>
                            <div class="box-form">
                                <input type="email" name="email" class="b-post" placeholder="Email" required autocomplete="off"/>
                                {{csrf_field()}}
                            </div>
                            <div class="clearfix">
                                <a href="{{site_url('')}}" class="pop-btn rt-btn pass-login clsComFloatLeft">Signin</a> <!--Please change the url here when user / Employer signin -->
                                <button type="submit" class="pop-btn lf-btn clsComFloatRight">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $("#js-forgot-pwd-form").validate({
              rules : {
                  email : {
                      required : true,
                      validate_email : true,
                  }
              },

               submitHandler : function (form) {
                   form.submit();
               }
            });
        });
    </script>
@endpush