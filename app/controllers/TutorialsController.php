<?php

class TutorialsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //get all tutorials
        $tuts = DB::table("tutorials")->get();

        return View::make("tutorials.index")
            ->with("tuts",$tuts);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //
        $validator = Validator::make(
            array(
                "id" => $id
            ),
            array(
                "id" => array("required","exists:tutorials,id")
            )
        );
        if($validator->fails())
            App::abort(404);
        $tut = DB::table("tutorials")->where("id",$id)->get();
        $date = date("l F jS g:i A",$tut[0]->date);
        return View::make("tutorials.show")
            ->with("date",$date)
            ->with("tut",$tut[0]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
