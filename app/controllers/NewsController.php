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
        $news = $this->getCurrentNews();
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
        //Start with validating that the story exists
        $validator = Validator::make(
            array('story'=>$id),
            array("story"=>array("required","exists:news,id"))
        );
        //Throw 404 if does not exist
        if($validator->fails())
            App::abort(404);
        //Passed validation now retrieve item and make the view
        $story = $this->getCurrentNews(1,true,$id);
        return View::make("news.story")
            ->with("story",$story);
    }
/*******************************************************************************
 * Private Functions
 * *****************************************************************************
 */
    private function getCurrentNews($amount = 5,$individual=false,$id=false)
    {
        if($individual == true && $id > 0)
        {
            //Return an individual news story
            $news = DB::table("news")
                ->where("id",$id)
                ->first();
        } 
        elseif($amount > 0)
        {
            //return a few news stories - just the brief descriptions
            $news = DB::table("news")
                ->where("published",1)
                ->where("display_date","<",date("Y-m-d H:i:s"))
                ->take(5)
                ->get();
        }else{
            $news = false;
        }
        return $news;
    }

}
