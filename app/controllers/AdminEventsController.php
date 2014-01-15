<?php

class AdminEventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
        return View::make("admin.events.index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("admin.events.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
           $inputs = array(
               'title' => Input::get('title'),
                'display_date' => Input::get('display_date'),
                'start_time' => Input::get('start_time'),
                'end_time' => Input::get('end_time'),
                'brief_intro' => Input::get('brief_intro'),
                
            );
           $validator = Validator::make(
               array(
                   'title' => $inputs['title'],
                   'brief intro' => $inputs['brief_intro'],
                   'display date' => $inputs['display_date'],
                   'start_time' => $inputs['start_time'],
                   'end_time' => $inputs['end_time'],
               ),
               array(
                'title' => array("required","min:5"),
                'brief intro' => array("required","min:5"),
                'display date' => array("required","date"),
                'start_time' => array("required"),
                'end_time' => array("required"),
               )
           );
           if($validator->fails())
           {
               $str = "";
               foreach ($validator->messages()->all() as $t)
               {
                   $str .= $t."<br/>";
               }
               return $str;
           }else{
               $id = DB::table("events")->insertGetId($inputs);
               return Redirect::to("/admin/events");
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
		return "esr";
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
