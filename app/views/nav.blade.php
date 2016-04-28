@if (null == (Session::get("is_logged_in")))
<nav class="main_nav navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">The Black Cabinet</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
                   </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li>{{ HTML::link('users', 'Register') }}</li>
      <li>{{ HTML::link('login', 'User Login') }}</li>
      <li>{{ HTML::link('Dealerlogin', 'Dealer Login') }}</li>
      </ul>
    </div>
  
</nav>
@else
<nav class="main_nav navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">The Black Cabinet</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
           
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li>{{ HTML::link('profile', 'Profile') }}</li>
        
      </ul>
    </div>
  
</nav>
@endif