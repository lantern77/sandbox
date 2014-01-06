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
Route::resource('tutorials','TutorialsController',
    array('only' => array('index', 'show')));

	
	
 /*
	Notes Route
	Checks authorization
  */ 
Route::group(array('before' => 'auth'), function()
{
    Route::resource('notes', 'NotesController');
});	

	
	
Route::resource('mechatronics','MicroController',
    array('only' => array('index')));

/*
 * About Route
 * ===========
 * Currently just an index function. We can add other components to it later
 */
Route::controller('about','AboutController');
Route::controller('learn','LearnController');
Route::controller('events','EventsController');


/*
 * ********************************************************************************
 * ADMIN ROUTES
 * ********************************************************************************
 */
//Routes
Route::resource('admin/news','AdminNewsController');
Route::resource('admin/tutorials','AdminTutorialsController');
Route::resource('admin/users','AdminUsersController');
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

Route::post('login',function()
    {
        //Get Login credentials
        $email = Input::get("email");
        $password = Input::get("password");
        $rememberMe = Input::get("remember") ? true : false;

		
		//Validate email and password before auth attempt
		//Rules about email/password format can be changed here
		$rules = array(
					'email' => array('required','email'),//'regex:$@mcmaster.ca'),
					'password' => array('required')
		
				 );
		        $validator = Validator::make(
           array('email' => $email, 'password' => $password),
           $rules
            );	
		 //If input is invalid
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

		//Logs in user if authentication successful, else return to login screen
        if(Auth::attempt(array('email' => $email, 'password' => $password),$rememberMe))
        {
            return Redirect::intended('/');
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
        return Redirect::to('/');
    }
);


// error page for unverified accounts
Route::get('error',function()
{
	return View::make('base.error');
}
);
