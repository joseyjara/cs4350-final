<html>
<head>

    <title>@yield("title")</title>

    {{ HTML::style( asset('css/bootstrap.min.css') ) }}
    {{ HTML::style(asset('css/bootstrap.min.css')) }}
    {{ HTML::style( asset('css/base.css') ) }}
    {{  (isset($script)) ? $script : ' ' }}
  

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