<?php

class AdminModel extends MY_Model
{

	public $_table = 'admins';




	/*
	* Function Name: checkUser
	* Description: Authenticates user
	*/
	public function checkUser($username, $password)
	{
		
		$data = $this->get_all();
		
		foreach($data as $row)
		{
			$isUser = 0;
			
			if ($username == $row->username) {
				$isUser = 1;
			}
			
			if ($password == $row->password) {
				$isUser = 2;
				break;
			}
		}
		
			return $isUser;

	}




	/*
	* Function Name: addAdmin 
	* Description: Adds a new admin
	*/
	public function addAdmin($username, $password, $email)
	{

	}

	/*
	* Function Name: deleteAdmin
	* Description: Deletes an admin
	*/
	public function deleteAdmin($username)
	{

	}


	/*
	*  Function Name: getEmail
	*  Description: Retrieves the admin's email address
	*
	*/
	public function getEmail($username, $password)
	{

	}


	/* 
	* Function Name: getProperty
	* Description: get any property value corresponding to any username
	* Special Note: Easier to add more properties and new functions or new information about the admin
	*/
	public function getProperty($nameOfProperty, $username)
	{

	}


}