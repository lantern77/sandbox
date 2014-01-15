<?php

class LearnController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //
        return View::make('learn.index');
    }
    public function getTutorials(){
        return View::make('learn.tutorials');
    }
    public function getResources(){
        return View::make('learn.resources');
    }

}

