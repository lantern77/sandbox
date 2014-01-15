<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 * Base Route
 * ==========
 * Will get the index
 */
Route::get('/', function()
{
    $events = DB::table('events')->where('time',">",time())->take(2)->get();
    return View::make('base.base')
        ->with("events",$events);
});

/*
 * News Routes
 * ===========
 * Will be handled by RESTFUL Controller
 */
Route::resource('news','NewsController',
    array('only' => array('index', 'show')));
/*
*
*/
Route::resource('tutorials','TutorialsController',
    array('only' => array('index', 'show')));

Route::resource('tutors','TutorController');


/*
  Notes Route
  Checks authorization -- see auth filter in filters.php
 */
Route::group(array('before' => 'auth'), function() {
            Route::resource('notes', 'NotesController');
        });



Route::resource('mechatronics', 'MicroController', array('only' => array('index')));

/*
 * About Route
 * ===========
 * Currently just an index function. We can add other components to it later
 */
Route::controller('about','AboutController');
Route::controller('learn','LearnController');
Route::controller('events','EventsController');
Route::controller('calendar','CalendarController');


/*
 * ********************************************************************************
 * ADMIN ROUTES
 * ********************************************************************************
 */
//Routes
Route::resource('admin/news','AdminNewsController');
Route::resource('admin/tutorials','AdminTutorialsController');
Route::resource('admin/users','AdminUsersController');
Route::resource('admin/events','AdminEventsController');
Route::resource('admin','AdminController');

//Filters
Route::when("admin/*","auth");
Route::when("admin","auth");


/*
 * *******************************************************************************
 * Login and Logout Routes
 * *******************************************************************************
 */
Route::get('login',function()
    {
        return View::make('base.login');
    }
);

//**************************************************************************************
//	Peter's Work
//**************************************************************************************
//Simply creates the view of the form


//Route::model('userConfirm','User');
Route::get('signup',array('as' => 'signupform',function()
    {
        return View::make('base.signup');
    }
));

// Goes back to controller for creation
Route::post('signupcreate',array('as' => 'addsUser','uses'=>'SignUpController@addUser'));  //Note that this throws a 405 error when this is accesed directly from URI, normal behaviour just need screen for that
Route::get('confirm',array('as' => 'goConfirmEmail','uses'=>'ConfirmationController@page'));
Route::group(array('domain' => 'seclub.com'), function()
{
    Route::get('confirmation/{code}',array('as' => 'verifyEmail','uses'=>'ConfirmationController@confirmed'));
});


//********************************************************************
Route::post('login',function()
    {
        //Get Login credentials
        $email = Input::get("email");
        $password = Input::get("password");
        $rememberMe = Input::get("remember") ? true : false;

        //Validate Login Creds
        $validator = Validator::make(
           array('email' => $email, 'password' => $password),
           array('email' => array('email','required'),
                "password" => array("required"))
            );
        if($validator->fails())
        {
            $mes = "";
            foreach($validator->messages()->all("<p>:message</p>") as $m)
            {
                $mes .= $m;
            }
            return Redirect::to("login")
                ->with("error",$mes);
        } 

        //Validation has passed not its time to see if the email and password match someone
        if(Auth::attempt(array('email' => $email, 'password' => $password),$rememberMe))
        {
            return Redirect::intended('admin');
        }else{
            return View::make("base.login")
                ->with("error","The supplied credentials are incorrect. Please try again")
                ->with("email",$email);
        }
    }
);
Route::get('logout',function()
    {
        Auth::logout();
        return Redirect::to('login');
    }
);
