<?php

class TK extends CI_Controller

{

function toolegit()
{
	echo "Type your name below";

	$this->load->helper('form');

	echo form_open();	
	# Creating the imput box
	echo form_input('username', '');
	# Creating the button
	echo form_submit('mike', 'Submit');

	echo form_close();

}


}