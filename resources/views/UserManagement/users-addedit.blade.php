@extends('layout.layout')

<?php
$formHeadding = 'Add/Edit User';
?>
@section('title')
{{$formHeadding}}
@endsection
@section('content')
@include('show-message')



<a href="{{site_url('/')}}" >Home</a><br>
<a href="{{site_url('users-list')}}" >Users</a><br>
<a href="{{site_url('user-addedit')}}" >Add User</a><br>
<a href="{{site_url('/logout')}}" >logout</a>



    
   
