<?php


class eventsModel extends CI_Model
{
	/*
	* Function Name: getUpcomingEvents
	* Description: This retrieves the information about all upcoming events
	*/
	function getUpcomingEvents()
	{

	}

	

	/*
	* Function Name: deleteEvent
	* Description: Delete an event from the database
	*/
	function deleteEvent($name)
	{

	}

	

	/*
	* Function Name: addEvent
	* Description: Add an event to the database
	* Special parameters : $map (A link to a map, ex. google map of address)
	*/
	function addEvent($title, $date, $start, $end, $description, $address, $map)
	{

	}


	
	/*
	* Function Name: editEvent
	* Description: Edit any property of the event, if null, those properties do not
				   change from the one in the database already
	*/
	function editEvent($title, $date, $start, $end, $description, $address, $map)
	{

	}


}