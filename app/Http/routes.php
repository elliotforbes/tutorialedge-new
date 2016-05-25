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
Route::get('/courses', 'PageController@courses');
Route::get('/blog/{slug}', 'PageController@blogSingle');
Route::get('/advertise', 'PageController@advertise');
Route::get('/sitemap', 'PageController@sitemap');
Route::get('/profile', 'PageController@profile');
Route::get('/books', 'BookController@index');
Route::get('/books/{slug}', 'BookController@single');

Route::resource('comments', 'CommentController');

// Route::get('/test', 'EmailController@test');

Route::group(['prefix' => 'api/v1'], function (){
    Route::resource('lessons', 'LessonsController', ['only' => ['index', 'show']]);    
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
// Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'Admin\AdminController@Home'); 
    Route::resource('articles', 'Admin\LessonController');
    Route::resource('users', 'Admin\UserController');
    Route::resource('comments', 'Admin\CommentController');
    Route::get('/settings', 'Admin\AdminController@Settings');
    Route::get('/stats', 'Admin\AdminController@Stats');
    
});

Route::get('/testadmin', 'Admin\AdminController@Home');

Route::get('/forum', 'PageController@forum');

Route::get('/tag/{slug}', 'PageController@tag');

Route::get('/course/{slug}', 'PageController@course');
Route::get('/{slug}', 'PageController@show');


Route::get('/auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/github/callback', 'Auth\AuthController@handleProviderCallback');

