@extends('../master')

@section('title', 'Final Project')

@section('nav')
    @parent

    @include('../nav')

@endsection

@section('content')
<div class="container-fluid dealer_main">
  
  
  <div class="main_contain container-fluid">
   <h2>
     Dealer Information
    </h2>
    
    {{Form::label("name","Name" )}}
    {{Form::text("text",$dealer->name, ["name" => "name", "class"=>"form-control" ,"readonly"=>"readonly"])}}
    {{Form::label("license", "License")}}
    {{Form::text("text", $dealer->license, ["name" =>"license","class"=>"form-control" , "readonly"=>"readonly"])}}
    {{Form::label("business", "Business")}}
    {{Form::text("text", $dealer->business, ["name" =>"business","class"=>"form-control" , "readonly"=>"readonly"])}}
    {{Form::label("street", "Street")}}
    {{Form::text("text", $dealer->street, ["name" =>"street","class"=>"form-control" , "readonly"=>"readonly"])}}
     {{Form::label("city", "City")}}
    {{Form::text("text", $dealer->city, ["name" =>"city","class"=>"form-control" , "readonly"=>"readonly"])}}
     {{Form::label("state", "State")}}
    {{Form::text("text", $dealer->state, ["name" =>"state","class"=>"form-control" , "readonly"=>"readonly"])}}
     {{Form::label("zip", "Zip")}}
    {{Form::text("text", $dealer->zip, ["name" =>"zip","class"=>"form-control" , "readonly"=>"readonly"])}}
     {{Form::label("phone", "Phone")}}
    {{Form::text("text", $dealer->phone, ["name" =>"phone","class"=>"form-control" , "readonly"=>"readonly"])}}
     {{Form::label("rating", "Rating")}}
   <h3 class="rating">
     {{$dealer->rating}}
    </h3>
    <div class="social">
     <ul>
        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-youtube-play"></i></a></li>
    </ul>
    </div>
   
    
  </div>
 <div class="container-fluid dealer_options">
    <a href="<?=action('DealerController@index');?>">{{Form::button("Go Back", array("class" => "btn btn-primary")) }}</a>
   
  </div>
  
  <div class="row comment_section">
    <div class="col-sm-6">
          <h3>
      Make a Comment
    </h3>
{{ Form::open(array('url' => 'dealer/submit_comment', 'class' =>'form dealer_form')) }}
      <input type="hidden" name="id"value="{{$dealer->Dealer_Key}}" />
  {{Form::label("comment", "Comment (Must Be Logged In)")}}
  {{Form::textarea("comment", null, ["class" => "form-control"])}}  
  
  {{Form::submit("Submit")}}  
    
{{Form::close()}}
  </div>
    <div class="col-sm-6">
        <h3>
      Location Map
    </h3>
    <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $dealer->street ." ".$dealer->city." ".$dealer->state." ".$dealer->zip; ?>&output=embed"></iframe>
  </div>
      
      
      
 </div>
    
  <div class="container-fluid view_comments">
<div class="row">
   <div class="col-md-8">
       <div class="page-header">
           <h1><small class="pull-right">Gun Owner Reviews</small> Comments </h1>
       </div> 
          <div class="comments-list">
    @if(empty($comments))
      <h4>
        No Comments Made
      </h4>      
    @endif        
    @foreach ($comments as $comment)
                       <div class="media">
                           <p class="pull-right"><small>{{date("Y-m-d")}}</small></p>
                            <a class="media-left" href="#">
                              
                            </a>
                            <div class="media-body">
                                
                            {{$comment->Comment}}
                              
                              <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                            </div>
            </div>
    @endforeach
  </div>
  </div>
    </div>
    
  </div>
   
  
  
</div>
  

@endsection


@section('footer')
    @parent
    @include('../footer')
<?=isset($script) ? $script : '' ?>  

@endsection