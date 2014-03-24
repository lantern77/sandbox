<?php

class CalendarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
     	/*
     	 * Returns a view consisting of a google calendar
     	 */
        return View::make('calendar.index');
            
    }
    
}

