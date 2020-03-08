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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//select
Route::get('userdetails','UserController@showlist');
//select by id
Route::get('userdetails/{id}','UserController@showlistById');  
//add
Route::post('adddetails','UserController@savelist');
//update
Route::patch('editdetails/{id}','UserController@editlist');
//delete
Route::delete('deletedetails/{id}','UserController@deletelist');
//Login
Route::post('login','UserController@login');
