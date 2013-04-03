<?php

class TK extends CI_Controller

{

function toolegit()
{
	echo "Can't Touch This - na na na ";

	$this->load->helper('form');
	echo form_open();	
	echo form_input('username', 'johndoe');
	echo form_submit('mike', 'tk');
	echo form_close();

}


}