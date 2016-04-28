@extends('../master')

@section('title', 'Final Project')

@section('nav')
    @parent

    @include('../nav')

@endsection

@section('content')
<div class="container-fluid dealer_main">
  
  <div class="container-fluid dealer_options">
    
    <form class="form-inline">
    
    <label for="dealer_search_form" class=" form-control">Search</label>
    <input type="search" class="dealer_search form-control" name="dealer_search_form"/>   
    </form>
    <hr class="line-break" />
  </div>
  <div class="main_contain container-fluid">
{{ Form::open(array('url' => 'dealer/view', 'class' =>'form dealer_form')) }}
    <input type="hidden" id="id"name="id" />
    <table class="dealer_table table table-striped">
      
    <thead>
      <th>Number</th>
      <th>License</th>
      <th>Rating</th>
      <th>Name</th>
      <th>Business</th>
      <th>Street</th>
      <th>City</th>
    </thead>
    <tfoot>
      </tfoot>  
     <tbody> 
       @foreach($dealers as $dealer)
       
       <tr>
       <td>{{$dealer->Dealer_Key}}</td>  
       <td>{{$dealer->license}}</td>
       <td class="rating">{{$dealer->total}}</td>  
       <td>{{$dealer->name}}</td>
       <td>{{$dealer->business}}</td>
       <td>{{$dealer->street}}</td>
       <td>{{$dealer->city}}</td>
       </tr>
       @endforeach
      </tbody>
    </table>
    {{Form::close()}}
    {{ $dealers->links() }}

  </div>
 
  
</div>
  

@endsection


@section('footer')
    @parent
    @include('../footer')
<?=isset($script) ? $script : '' ?>  



@endsection