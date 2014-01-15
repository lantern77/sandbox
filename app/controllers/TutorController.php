<?php
//by Arka Ganguli
class TutorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tutors = DB::table("tutors")->get(); 

		return View::make("tutors.index")
			->with("tutors", $tutors);  

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courseName = DB::table("courses")->get();

		return View::make("tutors.create")
			->with("courseName", $courseName);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');
		$year = Input::get('year');
		$course = Input::get('course');
		$email = Input::get('email');
		$description = Input::get('description');
		
		$validator = Validator:: make( 
		array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'year' => $year,
			'description' => $description
			),
		array(
			'firstname' => 'required| min:2',
			'lastname' => 'required|min:2',
			'year' => 'required|numeric:min:2',
			'email' => 'required|email|unique:users',
			'description' => 'required| min:10'
			)
		);

		if ($validator -> fails()){
			$msg1 = '<div style="color:red">Upload failed.</div>';
			
			return Redirect::to('/tutors/create')->with('message', $msg1);
		}
		else{
			DB::table('tutors')->insert(
	    		array('firstname' => $firstname, 'lastname' => $lastname, 'year' => $year, 'course' => $course,'email' => $email, 'description' => $description)
			);
			

			$msg = '<div style="color:green">Sign up Successful.</div>';

			
			return Redirect::to('/tutors')->with('message', $msg);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		

		$tutor = DB::table("tutors")->where("id",$id)->get();

        return View::make("tutors.show")
            ->with("tutor",$tutor[0]);
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
