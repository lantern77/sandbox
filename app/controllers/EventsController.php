<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //
        return View::make('events.index');
    }
    public function getCusec(){
        return View::make('events.cusec');
    }
    public function getPast(){
        return View::make('events.past');
    }
    public function getGallery(){
        return View::make('events.gallery');
    }

}


