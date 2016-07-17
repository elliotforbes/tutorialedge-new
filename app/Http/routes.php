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
Route::get('/forum', 'PageController@forum');
Route::get('/register', 'PageController@register');
/*
 * Book Review Routes:
 */ 
Route::get('/books', 'BookController@index');
Route::get('/book/{slug}', 'BookController@single');
/*
 * Error Routes.
 */
Route::get('/404', 'PageController@error404');
Route::get('/500', 'PageController@error500');
Route::get('/error', 'PageController@error');

// Route::get('/admin-test', 'Admin\AdminController@test');

Route::group(['prefix' => 'admin'], function(){
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'Admin\AdminController@Home'); 
    Route::resource('articles', 'Admin\LessonController');
    Route::resource('users', 'Admin\UserController');
    Route::resource('comments', 'Admin\CommentController');
    Route::get('/settings', 'Admin\AdminController@Settings');
    Route::get('/stats', 'Admin\AdminController@Stats');
    
});

// Tags, Courses and Single Lessons
Route::get('/tag/{slug}', 'PageController@tag');
Route::get('/course/{slug}', 'PageController@course');
Route::get('/{slug}', 'PageController@show');

Route::resource('comments', 'CommentController');

Route::get('/testemail', 'EmailController@test');

Route::group(['prefix' => 'api/v1'], function (){
    Route::resource('lessons', 'LessonsController', ['only' => ['index', 'show']]);    
});


/*
* Our github authentication routes 
*/
Route::get('/auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/github/callback', 'Auth\AuthController@handleProviderCallback');
/*
* Our facebook authentication routes 
*/
Route::get('/auth/redirect', 'Auth\SocialAuthController@redirect');
Route::get('/auth/callback', 'Auth\SocialAuthController@callback');
