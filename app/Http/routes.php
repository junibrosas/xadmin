
<?php

use App\Events\FileWasUploaded;


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



// Auth routes
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function()
{
    Route::get('/', ['as' => 'auth.root', 'uses' => 'AuthController@getLogin']);
    Route::get('login',  ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
});

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function()
{
    Route::get('/', ['as' => 'admin.root', 'uses' => 'DashboardController@index']); // 'root' is route name used to make the application index url separate from the rest of the pages and routes.
    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('files', 'FileController');
    Route::resource('menu', 'MenuController');
});


get('file-upload', function(){
    event(new FileWasUploaded('Hello Jayde!'));
});


get('test', function(){
        
    _trace($tagGroup);
});