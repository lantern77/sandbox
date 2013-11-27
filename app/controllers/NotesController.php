<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //get all notes
        $notes = DB::table("notes")->get();

        return View::make("notes.index")
            ->with("notes",$notes);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make("notes.upload");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$timestamp = time();
		//$filename
		
		$file = Input::file('filename');
		
		 echo $file;
		
		
		
	}

	/**
	 * Display the details of the note.
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
                "id" => array("required","exists:notes,id")
            )
        );
        if($validator->fails())
            App::abort(404);
        $notes = DB::table("notes")->where("id",$id)->get();
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
