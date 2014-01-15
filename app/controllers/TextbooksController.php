<?php

class TextbooksController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //get textbooks
    $textbooks = DB::table('textbooks')->where('Title', "!=", '')->get();
    return View::make('textbooks.index')
      ->with("textbooks",$textbooks);
  }

  public function create(){
    return View::make('textbooks.create');
  }

  public function adSubmitted(){
    return View::make('textbooks.adSubmitted');
  }
      
  public function ad(){
    return View::make('textbooks.ad');
  }

  public function store()
  {
    $title = Input::get('title', 'Title');
    $description = Input::get('description', 'Description');
    $course = Input::get('course', 'Course');
    $condition = Input::get('condition', 'Condition');
    $price = Input::get('price', '50');
    $isbn = Input::get('isbn', 'ISBN');
    $edition = Input::get('edition', '3');
    $date = date('Y-m-d');
    $textbooks = DB::table('textbooks')->where('title',"!=","")->get();

    #error with if statements ; check for errors (session.errors?)
    #go through documentation
    #displays error messages only if there is an error; ie. its always there, but not displayed
    
    $validator = Validator::make(
      array('title'=>$title,
        'description'=>$description,
        'course'=>$course,
        'condition'=>$condition,
        'price'=>$price,
        'isbn'=>$isbn,
        'edition'=>$edition
        ),
      array('title'=>'required|min:10',
        'description'=>'required',
        'course'=>'required|min:3',
        'condition'=>'required|min:3',
        'price'=>'required|numeric|min:2',
        'isbn'=>'required|numeric|min:10',
        'edition'=>'required'
        )
      );

    if ($validator->fails())
    {
      return Redirect::to('/textbooks/create')->withErrors($validator);
      #->with('title',$title,'description',$description);

    } else {
      DB::table('textbooks')->insert(
        array('Title' => $title, 'Description' => $description, 'Course'   => $course, 'Cond' => $condition,'Price' => $price, 'ISBN' => $isbn,'Edition' => $edition, 'Date' => $date)
          );
      return View::make('textbooks.adSubmitted');
    }
    
    
    return Redirect::to('/');
  }
}

#delete, show(for individual items)
#contact information will be taken from the login information

#Auth::user()->id;  will give the currently logged in user, get name and ID
#validate info


