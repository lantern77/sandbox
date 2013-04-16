<?php


class newsModel extends CI_Model
{

	/* 
	* Function Name: getNewsItems
	* Description: Retrieves the news items and their contents
	*/ 
	function getNewsItems($page, $numItemsPerPage)
	{

	}


	/* 
	* Function Name: deleteNewsItem
	* Description: Deletes the item with that title
	*/ 
	function deleteNewsItem($title)
	{

	}

	/* 
	* Function Name: addNewsItem
	* Description: Adds a single news item to the database
	*/ 
	function addNewsItem($author, $title, $content, $blurb)
	{

	}


	/* 
	* Function Name: editNewsItem
	* Description: Edits a single news item, if every parameters is null it does not edit anything. 
	*/ 
	function editNewsItem($author, $title, $content, $blurb)
	{

	}


	/* 
	* Function Name:getSingleNewsItem
	* Description: Retrieves all of the information for a single news item
	* 			   given its name or id
	*/ 
	function getSingleNewsItem($idOrName)
	{

	}

	/* 
	* Function Name: newsItemOperation
	* Description: Does the low-level database operations
	*  		       The array will contain a certain protocol to allow the method to 
	* 			   decipher it. 
	*/ 
	function newsItemsOperation($array)
	{

	}








}	

?>