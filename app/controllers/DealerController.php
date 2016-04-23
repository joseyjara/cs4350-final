<?php

class DealerController extends BaseController {

 
  
  //This segment displays all of our dealers.
  public function index(){
    
    $dealers = Dealer::paginate(25);
		
		//Test
		//For each dealer, we need to determine a rating.
		$test_rate = Rating::find(1);
		
    $script = View::make("dealer/script");
    //Echo them to the page we specify.
		return View::make('dealer/view_all', ["dealers" => $dealers, "script" =>$script]);
    
  }
  
  
  
  public function view(){
    //This segment displays an individual dealer to the user.
    //This will display a view for a single case. 
    return View::make("dealer/view_single");
    
    
  }
  
  
  
  
  
  
}