<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@Home');
Route::get('/tutorials', 'PageController@allTutorials');
Route::get('/search', 'PageController@search');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/blog', 'PageController@blog');
Route::get('/advertise', 'PageController@advertise');

Route::group(['prefix' => 'api/v1'], function (){
    Route::resource('lessons', 'LessonsController');    
});

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware', 'prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@Home'); 
});

Route::get('/course/{course}', 'PageController@course');
Route::get('/{slug}', 'PageController@show');


