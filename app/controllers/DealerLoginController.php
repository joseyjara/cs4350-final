<?php

class DealerLoginController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Login Controller
  |--------------------------------------------------------------------------
  |
  |
  |
  |
  */

  public function __construct() {
      $this->beforeFilter('csrf', array('on'=>'post'));
  }

  public function index(){
      return View::make('dealerLogin');

  }


  public function login(){

      //Perform a check here
    // validate the info, create rules for the inputs
  $rules = array(
    'business' => 'required' 
  );

  // run the validation rules on the inputs from the form
  $validator = Validator::make(Input::all(), $rules);
  
  // if the validator fails, redirect back to the form
  if ($validator->fails()) {
    return Redirect::to('Dealerlogin')
      ->withErrors($validator)// send back all errors to the login form
      ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
  } else {

    // create our user data for the authentication
    $userdata = array(
      'business' => Input::get('business'),
      'license' => Input::get('license')
    );
   die();
    // attempt to do the login
    if (Auth::attempt($userdata)){
      // validation successful!
      // redirect them to the secure section or whatever
      // return Redirect::to('secure');
      // for now we'll just echo success (even though echoing in a controller is bad)
      
      //We need to place this in the session.
      Session::put("is_logged_in", true);
      
      
      return Redirect::to('/');

    } else {
      // validation not successful, send back to form
      return Redirect::to('dealerLogin');
      
    }

  }


  }

  public function doLogout()
  {
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
  }






  public function account(){
    
    //if(isset(Session::get("is_logged_in"))){
    
    if (Auth::check()) {
            // $request->user() returns an instance of the authenticated user...
    }
      
      
      //Pull our account data.
      //Use either post or get to retrieve it. 
      
    //}
      
      
  }



  












}
