<?php

class CalendarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
     
        
       
        return View::make('calendar.index');
            
    }
    
}

