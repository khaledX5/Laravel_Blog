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

Route::get('/', 'PostsController@index');
/*Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::post('posts/store', 'PostsController@store');
Route::get('posts/{id}', 'PostsController@show');
Route::get('posts/{id}/edit', 'PostsController@edit');
*/

Route::resource('posts','PostsController');
Route::get('about', function () {
    return 'about me ya brns';
});
Route::controllers([
   'auth'=>'Auth\AuthController' ,
   'password'=>'Auth\PasswordController', 
]);
