@extends('layout.layout')

<?php
$formHeadding = 'Dashboard';
?>
@section('title')
{{$formHeadding}}
@endsection
@section('content')
@include('show-message')


home page

<br>
<br>

<a href="{{site_url('/logout')}}" >logout</a>



    
   
