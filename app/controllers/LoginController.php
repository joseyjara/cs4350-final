<?php

class LoginController extends BaseController {

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
      return View::make('login');

  }


  public function login(){

      //Perform a check here
    // validate the info, create rules for the inputs
  $rules = array(
    'email' => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
  );

  // run the validation rules on the inputs from the form
  $validator = Validator::make(Input::all(), $rules);

  // if the validator fails, redirect back to the form
  if ($validator->fails()) {
    return Redirect::to('login')
      ->withErrors($validator)// send back all errors to the login form
      ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
  } else {

    // create our user data for the authentication
    $userdata = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

      // validation successful!
      // redirect them to the secure section or whatever
      // return Redirect::to('secure');
      // for now we'll just echo success (even though echoing in a controller is bad)
      
      //We need to place this in the session.
      Session::put("is_logged_in", true);
      
      
      echo 'SUCCESS!';

    } else {
      
      // validation not successful, send back to form
      return Redirect::to('login');

    }

  }


  }

  public function doLogout()
  {
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
  }


  public function getRegister() {
      return View::make('users/register');
  }

  public function create(){
    $validator = Validator::make(Input::all(), User::$rules);
print_r($validator->passes());
    die();
         if ($validator->passes()) {
          // validation has passed, save user in DB
          $user = new User;
          $user->firstname = Input::get('firstname');
          $user->lastname = Input::get('lastname');
          $user->email = Input::get('email');
          $user->password = Hash::make(Input::get('password'));
          $user->save();

          return Redirect::to('users/login')->with('message', 'Thanks for registering!');
      } else {
          // validation has failed, display error messages
          return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
      }




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
