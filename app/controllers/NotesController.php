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
		// TBI: sort notes by class, author, etc
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
		        //get all notes
        $notes = DB::table("notes")->get();

        return View::make("notes.upload")
            ->with("notes",$notes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		// TBI: 
		// authentication, appropriate storage directory, duplicate detection
		// change sql column 'class' to 'course' to avoid ambiguity
		
		
		$file = Input::file('filename'); //must specify extension for file to open correctly
		$fileName = $file->getClientOriginalName();
		$address = storage_path();
		$file->move($address, $fileName); //test directory, must be updated
	//	echo $address;
		
		// Database entry - 'notes' table
		$timestamp = time();  //time of submission (seconds since epoch)
		$author = "James"; // author should be that of the logged in user
		$course = Input::get('course');
		
		DB::table('notes')->insert(
		array('fileName' => $fileName,'class' => $course,'authorName' => $author,'date' => $timestamp,'address' => $address)
		);
		
		
	}

	/**
	 * Display the details of the note.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	///// DONT KNOW WHAT THIS IS
     /* $validator = Validator::make(
            array(
                "id" => $id
            ),
            array(
                "id" => array("required","exists:notes,id")
            )
        );
        if($validator->fails())
            App::abort(404);*/
		
	///////////////////////////////////////////
	
        $path = DB::table('notes')->where("id",$id)->pluck('address'); //DB entry for the selected note
		$name =	DB::table('notes')->where("id",$id)->pluck('fileName'); 
		//return Response::download($path.'\\'.$name);
		return Response::download($path.'\\'.$name, $name,  array('content-type' => 'application/octet-stream'));
		
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
