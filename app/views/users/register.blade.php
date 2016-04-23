@extends('master')

@section('title', 'Final Project')

@section('nav')
@parent

@include('nav')

@endsection

@section('content')

<!-- app/views/login.blade.php -->

{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
<h2 class="form-signup-heading">Please Register</h2>

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<p>
{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
</p>
<p>
{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
</p>
<p>
{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
</p>
<p>
{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
</p>
<p>
{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
</p>
<p>
<p>{{ Form::submit('Submit') }}</p>
</p>
{{ Form::close() }}

@endsection

