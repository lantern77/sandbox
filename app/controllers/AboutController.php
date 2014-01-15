<?php

class AboutController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //
        return View::make('about.index');
    }
    public function getHistory(){
        return View::make('about.history');
    }
    public function getExecutives(){
        return View::make('about.executives');
    }
    public function getMembers(){
        return View::make('about.members');
    }
    public function getSponsors(){
        return View::make('about.sponsors');
    }

}
