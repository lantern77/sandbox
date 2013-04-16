<?php


class galleryModel extends CI_Model
{



	/*************** ALBUM OPERATIONS ****************************************/

	/*
	* Function Name: deletePicture
	* Description: This deletes the picture corresponding to the name of the picture
	* 
	*/
	function getAllAlbumNames()
	{
		
	}

	/*
	* Function Name: deletePicture
	* Description: This deletes the picture corresponding to the name of the picture
	* 
	*/
	function addAlbum($name, $description)
	{

	}

	/*
	* Function Name: deletePicture
	* Description: This deletes the album and all its pictures 
	* 
	*/
	function deleteAlbum($name)
	{

	}	


	/**************** PICTURE OPERATIONS ************************************/

	/*
	* Function Name: addPicture
	* Description: This saves the name of the picture and source on the server
	* 
	*/
	function addPicture($name, $src, $description, $album)
	{

	}	


	/*
	* Function Name: deletePicture
	* Description: This deletes the picture corresponding to the name of the picture
	* 
	*/
	function deletePicture ($name, $album)
	{

	}


	/*
	* Function Name: getAllPicturesNames
	* Description: Retrieves all tha names of the pictures
	* Parameter : The name of the album to get all the names from
	* 
	*/
	function getAllPicturesNames($album)
	{

	}


	/*
	* Function Name: getAllPicturesSrcs
	* Description: Retrieves all of the names and source of every picture in a certain album
	* 
	*/
	function getAllPictureSrcs($album)
	{

	}


	/*
	* Function Name: getSrc
	* Description: This saves the name of the picture and source on the server
	* 
	*/
	function getSrc($name, $album)
	{

	}


	/*
	* Function Name: deletePicture
	* Description: This saves the name of the picture and source on the server
	* 
	*/
	function getAllNameAndSrc($album)
	{

	}
}

?>