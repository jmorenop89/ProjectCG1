<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/',['as' => 'login','uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['as' => 'logout','uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    //Route::get('/',['as' => 'admin.dashboard','uses' => 'Admin\AdminController@index']);

    /* Route::group(['prefix' => 'user'],function(){
        Route::get('/',['as' => 'user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('/order/{column?}/{order?}',['as' => 'user.order', 'uses' => 'Admin\UserController@index']);

        Route::get('/create',['as' => 'user.create', 'uses' => 'Admin\UserController@create']);
        Route::post('/create',['as' => 'user.create', 'uses' => 'Admin\UserController@store']);
        Route::get('/edit/{id}',['as' => 'user.edit', 'uses' => 'Admin\UserController@edit']);
        Route::post('/edit/{id}',['as' => 'user.edit', 'uses' => 'Admin\UserController@update']);
        Route::get('/state/{id}',['as' => 'user.state', 'uses' => 'Admin\UserController@state']);
        Route::post('/delete',['as' => 'user.delete', 'uses' => 'Admin\UserController@destroy']);
    }); */
  
});
