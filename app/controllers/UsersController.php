<?php
/**
 * Created by IntelliJ IDEA.
 * User: baske
 * Date: 4/18/2016
 * Time: 4:45 PM
 */

class UsersController extends BaseController {
    //protected $layout = "layouts.main";
  
  public function create()
    {
        $rules = array(
            'email' => 'required|email|unique:users', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes()) {
            // validation has passed, save user in DB
            
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            
            //$user->password = Hash::make(Input::get('password'));
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('login')->with('message', 'Thanks for registering!');
        } else {
            // validation has failed, display error messages
            return Redirect::to('users')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }

    public function getRegister() {
        return View::make('users/register');
    }

    
}