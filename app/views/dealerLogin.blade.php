@extends('master')

@section('title', 'Final Project')

@section('nav')
@parent

@include('nav')

@endsection

@section('content')

<!-- app/views/dealerLogin.blade.php -->

<!doctype html>
<html>
<head>
    <title>Look at me Login</title>
</head>
<body>

{{ Form::open(array('url' => 'Dealerlogin')) }}
<h1>Dealer Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('business') }}
    {{ $errors->first('license') }}
</p>

<p>
    {{ Form::label('business', 'business') }}
    {{ Form::text('business', Input::old('business'), array('placeholder' => 'business')) }}
</p>

<p>
    {{ Form::label('license', 'license') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit') }}</p>

<a href="{{ URL::to('logout') }}">Logout</a>
{{ Form::close() }}

@endsection
