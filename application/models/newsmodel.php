<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
	News Model
	*******************

	Class Name: 	NewsModel
	Author: 		Kulwinder Billen, Albert Dani, Mike Moniz, Thusanthan Kannan & SE CLUB
	Description: 	The following class encompasses all of the admin functions 

*/
	class Newsmodel extends MY_Model {


		/* Initialized Global Variables */

		public $_table = 'posts';


		/*
			Function Name: addNewsItem ($author, $title, $content, $blurb)
			Parameters:    $author  : Author of the post
						   $title   : Title of the post
						   $content : Post's Content
						   $blurb   : Summarized / Partial Content, if content is large. Set to null initially, unless changed
			Return: 	   Returns true or false depending on the status of the add operation
			Description:   Adds a news item to the posts / main page
		*/

		public function addNewsItem ($author, $title, $content, $blurb = "") {


		}

		/*
			Function Name: editNewsItem ($id, $author, $title, $content, $blurb)
			Parameters:    $id 		: Id of the editted post
						   $author  : Author of the post
						   $title   : Title of the post
						   $content : Post's Content
						   $blurb   : Summarized / Partial Content, if content is large. Set to null initially, unless changed
			Return: 	   True / False depending on the status of the edit operation
			Description:   First retrieves the single news item using getSingleNewsItemId($id) and then saves that same record 
						   back to the database.
		*/
		public function editNewsItem ($id, $author, $title, $content, $blurb) {
			
		}

	

			



	}