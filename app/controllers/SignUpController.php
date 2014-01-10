<?php

class SignupController extends BaseController{ // 

	public function addUser(){
	
	$validation=User::validate(Input::all());
	
		if($validation->passes()){
			$varCode=RandomGeneration::generate(25);
			User::create(array(
				'first_name'=>Input::get('first_name'),
				'last_name'=>Input::get('last_name'),
				'password'=>Hash::make(Input::get('password')),
				'email'=> Input::get('email'),
				'description'=>Input::get('description'),
				'confirmation_code'=>$varCode,
				'confirmation'=>0
			));
			
			// Sends mail
			 Mail::send('base.confirmMail', array('first_name'=>Input::get('first_name'),'confirm_code'=>$varCode), function($message){
				$message->to(Input::get('email'), Input::get('first_name').' '.Input::get('last_name'))->subject('Welcome to the Software Engineering Club Website!');
			});
			
				return Redirect::to('/confirm');
		} ///Failure condition
		else{
			return Redirect::to('/signup')->withInput()->withErrors($validation);
			
		}
	
	}
}