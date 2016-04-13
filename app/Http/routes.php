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

Route::group(['prefix' => 'api/v1'], function (){
    Route::resource('lessons', 'LessonsController');    
});

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware', 'prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@Home'); 
});

Route::get('/{slug}', 'PageController@show');

