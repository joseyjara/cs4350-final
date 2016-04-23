<nav class="main_nav navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">The Black Cabinet</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
           
            <li><a href="#">Page 3</a></li>
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li>{{ HTML::link('users', 'Register') }}</li>
      <li>{{ HTML::link('login', 'Login') }}</li>
      </ul>
    </div>
  
</nav>