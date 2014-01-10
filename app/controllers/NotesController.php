<?php

class NotesController extends \BaseController {

    /**
     * Display all notes, grouped by course. 
     * Each note is listed by name, and can be clicked to show details (author,date, etc) and a download link
     *
     * @return Response
     */
    public function index() {
        //all the notes, sorted by course code
        $notesDB = DB::table("notes")->orderBy('courseCode', 'ASC')->get();


        //no existing notes
        if (empty($notesDB)) {
            $notes = array();
        } else {
            //sort notes into array as follows: courseCode => [notes for course]

            $key = $notesDB[0]->courseCode; //key for first iteration
            $notes = array($key => array());  // first course

            foreach ($notesDB as $n) {

                $courseCode = $n->courseCode;

                if ($courseCode == $key) {
                    $notes[$key][] = $n; //add note to its course
                } else { //key for next course
                    $key = $courseCode;
                    $notes[$key] = array($n); //add first note of new course
                }
            }
        }

        // DB table listing all course codes and full names
        $course_listings = DB::table("course_names")->get();

        return View::make("notes.index")
                        ->with("course_notes", $notes)  //array of notes mapped to their course codes
                        ->with("course_listings", $course_listings);  //codes, full names of courses
    }

    /**
     * Show the form for uploading a new note.
     *
     * @return Response
     */
    public function create() {
        $fullNames = DB::table("course_names")->get();
        return View::make("notes.upload")
                        ->with("fullNames", $fullNames)
                        ->with("message",""); //upload status message
    }

    /**
     * Upload a note.
     * Stores file and creates db entry with filepath
     *
     * @return Response
     */
    public function store() {


        $validator = Validator::make(
                        array('f' => Input::file('filename'), 'd' => Input::get('desc')), array('f' => array('required'), 'd' => array('required'))
        );
        if ($validator->fails()) {
            
            $msg = '<div style="color:red">Upload failed.</div>';
            
            return Redirect::to('notes/create')
                    ->with("message",$msg);
        } else {

            $file = Input::file('filename'); 
            $fileName = $file->getClientOriginalName();
            
            //laravel's default storage location, /apps/storage or something
            $address = storage_path();
            $file->move($address, $fileName);
                
            // Database entry in 'notes' table
            $timestamp = time();  //time of submission (seconds since epoch)
            $author = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $courseCode = Input::get('course');

            $filedesc = Input::get('desc');
            DB::table('notes')->insert(
                    array('fileName' => $fileName, 'courseCode' => $courseCode, 'authorName' => $author, 'date' => $timestamp, 'address' => $address, 'file_description' => $filedesc)
            );
                
            $msg = '<div style="color:green">Upload Success.</div>';

            return Redirect::to('notes/create')
                    ->with("message",$msg);
        }
    }

    /**
     * Download the note with the provided id.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $path = DB::table('notes')->where("id", $id)->pluck('address'); //DB entry for the selected note
        $name = DB::table('notes')->where("id", $id)->pluck('fileName');

        return Response::download($path . '\\' . $name, $name, array('content-type' => 'application/octet-stream'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
//
    }

}