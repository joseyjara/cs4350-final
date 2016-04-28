<html>
<head>

    <title>@yield("title")</title>

    {{ HTML::style( asset('css/bootstrap.min.css') ) }}
    {{ HTML::style(asset('css/bootstrap.min.css')) }}
    {{ HTML::style( asset('css/base.css') ) }}
    {{ HTML::style( asset("//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"))}}

</head>
<body> 
@section('nav')
  @show




<div class="container-fluid">

    @yield('content')


</div>



@section('footer')
    @show

</body>
</html>