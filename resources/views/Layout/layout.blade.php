<!DOCTYPE html>
<html>
<head lang="en">
    <html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">    
    <title>@yield('title')</title>
    <meta name="keyword" content="">
    @yield('meta_tags')
    <!--<meta name="description" content="Let's Invest In You.">-->
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
<meta name="viewport" id="webviewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="x-rim-auto-match" content="none">
<link href="{{asset_url('public/css/style.css')}}" rel="stylesheet"/>
    @stack('css')
    <script>
        var basePath  = "{{secure_url_wb_crm('/')}}";
        var csrfToken = '{{csrf_token()}}';
    </script>
<script src="{{asset_url('public/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset_url('public/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset_url('public/js/vendors/jquery-ui-1.10.3.min.js')}}"></script>
<script src="{{asset_url('public/js/vendors/jquery.validate.min.js')}}"></script>
<script src="{{asset_url('public/js/vendors/show-message.js')}}"></script>
<script src="{{asset_url('public/js/login.js')}}"></script>

</head>

<body>

<div class="clsHeightAdjustment"></div>



@yield('content')



