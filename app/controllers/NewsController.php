<?php

class NewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
        $news = array("new","new1","new2","new3");
        return View::make("news.index")
            ->with("news",$news);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //Returns individual News Items
        return $id;
	}

}
