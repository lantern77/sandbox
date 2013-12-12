<?php

class NotesController extends \BaseController {

	/**
	 * Display all notes, grouped by course. 
	 * Each note is listed by name, and can be clicked to show details (author,date, etc) and a download link
	 *
	 * @return Response
	 */
	public function index()
	{
        //all notes, sorted by course
        $notes = DB::table("notes")->orderBy('course', 'ASC')->get(); 
		
		//sort notes into array organized as follows:  [key:course name => value:[notes for course]]
		
		//notes already sorted by course; new array entry is created every time a new course is encountered
		
		$key = $notes[0]->course; //key for first iteration
		$array = array($key => array()) ;  // first course, empty array for all notes for that course
		
		foreach ($notes as $n) 	{
								
			$courseName = $n->course;
			
			if ($courseName == $key) {
			
				$array[$key][] = $n; //add note to its course
					
			}else{ //when end of notes for that course
			$key = $courseName;
			
			$array[$key] = array($n); //add first note of course to new array
			}
		}
		
		
        return View::make("notes.index")
			->with("array", $array);
	}

	/**
	 * Show the form for uploading a new note.
	 *
	 * @return Response
	 */
	public function create()
	{	  
        return View::make("notes.upload");
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
		
		$file = Input::file('filename'); //must specify extension for file to open correctly
		$fileName = $file->getClientOriginalName();
		$address = storage_path();
		$file->move($address, $fileName); //laravel's default storage location, /apps/storage or something
		
		// Database entry - 'notes' table
		$timestamp = time();  //time of submission (seconds since epoch)
		$author = "James"; // author should be that of the logged in user
		$course = Input::get('course');
		
		DB::table('notes')->insert(
		array('fileName' => $fileName,'course' => $course,'authorName' => $author,'date' => $timestamp,'address' => $address)
		);
		
		return Redirect::to('/notes')->with('message', 'Upload successful!');
		
		
	}

	/**
	 * Download the note with the provided id.
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
