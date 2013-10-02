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
	return View::make('base.base');
});

/*
 * News Routes
 * ===========
 * Will be handled by RESTFUL Controller
 */
Route::resource('news','NewsController',
    array('only' => array('index', 'show')));
/*
 * About Route
 * ===========
 * Currently just an index function. We can add other components to it later
 */
Route::resource('about','AboutController',
    array('only' => array('index')));



/*
 * ********************************************************************************
 * ADMIN ROUTES
 * ********************************************************************************
 */
//Routes
Route::resource('admin/news','AdminNewsController');
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
        return "Post";
    }
);
Route::get('logout',function()
    {
        Auth::logout();
        return Redirect::to('login');
    }
);
