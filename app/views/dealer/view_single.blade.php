@extends('../master')

@section('title', 'Final Project')

@section('nav')
    @parent

    @include('../nav')

@endsection

@section('content')
<div class="container-fluid dealer_main">
  
  <div class="container-fluid dealer_options">
    <a href="<?=action('DealerController@index');?>">{{Form::button("Go Back", array("class" => "btn btn-primary")) }}</a>
   
  </div>
  <div class="main_contain container-fluid">
   <h2>
     Dealer Information
    </h2>
    {{Form::label("name","Name" )}}
    

  </div>
 
  
</div>
  

@endsection


@section('footer')
    @parent
    @include('../footer')

@endsection