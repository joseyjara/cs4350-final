@extends('master')

@section('title', 'Final Project')

@section('nav')
@parent

@include('nav')

@endsection


@section('content')

<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
    <title>Look at my profile</title>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Profile</h1>

<!-- if there are login errors, show them here -->
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' =>'form-control')) }}



    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ["class" => "form-control"]) }}
  
  
    {{Form::label('favorites', "Favorites")}}
    {{Form::textarea("")}}
  
  
    

{{ Form::submit('Submit', ["class"=>"btn btn-primary"]) }}

<a href="{{ URL::to('logout') }}">Logout</a>
{{ Form::close() }}
@endsection


