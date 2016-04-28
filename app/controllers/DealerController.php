<?php

class DealerController extends BaseController {

 
  
  //This segment displays all of our dealers.
  public function index(){
    
    $dealers = Dealer::paginate(25);
		
		//Test
		//For each dealer, we need to determine a rating.
		//Ok. Let's try a dealer
		foreach($dealers as $dealer){
				$rating = Rating::where('Dealer_Key', '=', $dealer->Dealer_Key)->get();
				//Each rating needs to be added to a total. This total needs to 
				//be appended to each dealer and echoed out.
				//Take each rating and iterate through it.
				
			//Dynamic properties??
			$dealer->total = $this->average_rating($rating);
		}
		//Dang. Can't load this before I load the footer in.Fixed! 
    $script = View::make("dealer/script");
    //Echo them to the page we specify.
		return View::make('dealer/view_all', ["dealers" => $dealers, "script" =>$script]);
    
  }
  
  
  
  public function view($id = ""){
    //This segment displays an individual dealer to the user.
    //This will display a view for a single case.
					
		if(empty($id)){
				$id = Input::get("id", 41);

			
					$dealer = Dealer::where("Dealer_Key", "=", $id)->first();
					//This contains our dealer information. We pass this in.
					//Lets get our rating.
					
					$rating = Rating::where('Dealer_Key', '=', $dealer->Dealer_Key)->get();
			
					$dealer->rating = $this->average_rating($rating);
				  $script = View::make("dealer/script");
		
					$comments = Comment::where('Dealer_Key', '=', $dealer->Dealer_Key)->get();
		

			    return View::make("dealer/view_single", ["dealer"=>$dealer,"script"=>$script, "comments"=>$comments]);	
			
			
			
			
			
			
		}else{
			
					$dealer = Dealer::where("Dealer_Key", "=", $id)->first();
					//This contains our dealer information. We pass this in.
					//Lets get our rating.
					
					$rating = Rating::where('Dealer_Key', '=', $dealer->Dealer_Key)->get();
			
					$dealer->rating = $this->average_rating($rating);
				  $script = View::make("dealer/script");
		
					$comments = Comment::where('Dealer_Key', '=', $dealer->Dealer_Key)->get();
		

			    return View::make("dealer/view_single", ["dealer"=>$dealer,"script"=>$script, "comments"=>$comments]);	
			
			
			
		}
					
		
    
    
  }
	
	public function submit_comment(){
		
		if((null !== Session::get("is_logged_in"))){
			
			$comment = new Comment();

			$user = User::where("email", "=", Session::get("email"))->first();
			
			
			$comment->User_Key = $user->User_Key;
			$comment->Dealer_Key = Input::get("id");
			$comment->Comment = Input::get("comment");
			
			$comment->save();
			$id = Input::get("id");
						
			
		return	Redirect::action("DealerController@view", array($id));			
			
	
			
			
			
		}else{
		return	Redirect::to('login');			
			
		}
		
		
	}
	
	
	
	
	private function average_rating($rating){
			
				$total =0;
				$count =0;
				foreach($rating as $rate){
					//This is never reached... Why.
					$total += $rate->Rating;

					$count++;
				}
				//Let's take the average.
				//If both $total and $count are 0
				if( $total ==0 && $count == 0){
					$total = 1;
				}else{
					$total = $total/$count;

				}
			//Dynamic properties??
	
		return $total;
	
	}
  
}  
 