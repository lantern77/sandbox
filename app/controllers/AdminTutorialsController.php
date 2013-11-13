<?php

class AdminTutorialsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
        return View::make("admin.tutorials.index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make("admin.tutorials.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        //
        $inputs = Input::all();
        //Create Validator
        $validator = Validator::make(
            array(
                "name" => $inputs['name'],
                "date" => $inputs['date'],
                "time" => $inputs['time'],
                "host" => $inputs['host'],
                "introduction" => $inputs['brief_intro'],
                "description" => $inputs['full_text'],
            ),
            array(
                "name" => array("required"),
                "date" => array("date","required"),
                "time" => array("required"),
                "host" => array("required","max:100"),
                "introduction" => array("required","max:140"),
                "description" => array("required")
            )
        );
        if($validator->fails())
        {
            $messages = "";
            foreach($validator->messages()->all() as $m)
            {
                $messages .= $m."<br/>";
            }
            return $messages;
        }else{
            $date = strtotime($inputs['date']." ".$inputs['time']);
            $id = DB::table("tutorials")->insertGetId(
                array(
                    "name" => $inputs['name'],
                    "date" => $date,
                    "host" => $inputs['host'],
                    "brief_intro" => $inputs['brief_intro'],
                    "description" => $inputs['full_text'],
                    "equipment" => $inputs['items']
                )
            );
            return Redirect::to("/admin/tutorials");

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
		//
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
