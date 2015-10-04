<?php
// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Xadmin\Features\CMS\Controllers'], function()
{
	Route::get('/', ['as' => 'admin.root', 'uses' => 'DashboardController@index']); // 'root' is route name used to make the application index url separate from the rest of the pages and routes.
	Route::resource('pages', 'PageController');
    Route::resource('posts', 'PostController');
    Route::resource('files', 'FileController');
    Route::resource('menu', 'MenuController');
});