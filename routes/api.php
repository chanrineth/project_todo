<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('status', 'TodoController@status')->name('status');

Route::post('store', 'TodoController@store')->name('store');

Route::get('delete/{id}','TodoController@delete')->name('delete');

Route::post('getshow','TodoController@getshow')->name('getshow');

Route::get('getshowbyid/{id}','TodoController@getshowbyid')->name('getshowbyid');








