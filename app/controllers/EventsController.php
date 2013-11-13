<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //get events
        
        $events = DB::table('events')->where('time',">",time())->get();
        return View::make('events.index')
            ->with("events",$events);
    }
    public function getCusec(){
        return View::make('events.cusec');
    }
    public function getPast(){
        //Get Past Events
        $events = DB::table('events')->where('time',"<=",time())->get();
        return View::make('events.past')
            ->with("events",$events);
    }
    public function getGallery(){
        return View::make('events.gallery');
    }

}


