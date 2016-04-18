@extends('master')

@section('title', 'Final Project')

@section('nav')
    @parent

    @include('nav')

@endsection

@section('content')

    <div class="jumbotron main_jumbo">

        <h1>Main Page</h1>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li>{{ HTML::link('users/register', 'Register') }}</li>
                        <li>{{ HTML::link('users/login', 'Login') }}</li>
                    </ul>
                </div>
            </div>
        </div>







    </div>



@endsection


@section('footer')
    @parent
    @include('footer')

@endsection