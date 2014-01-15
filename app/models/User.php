<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('first_name', 'last_name','password','email','description','confirmation_code','confirmation');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	
	public static function validate($input){
		$rules=array(
			'first_name' => 'required|between:3,25|alpha',
			'last_name'=> 'required|between:3,25|alpha',
			'email'=>'required|between:3,64|email|unique:users,email|regex:/mcmaster\.ca$/',
			'password' => 'required|between:8,25|confirmed',
			'password_confirmation'=>'required|alpha_num|between:8,25'
		);	
		return Validator::make($input,$rules);
	}
	
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}