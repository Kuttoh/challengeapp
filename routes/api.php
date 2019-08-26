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

Route::post('/supplier/createSupplier', 'SuppliersController@store');
Route::get('/supplier/editSupplier/{id}', 'SuppliersController@edit');
Route::post('/supplier/update/{id}', 'SuppliersController@update');
Route::delete('/supplier/delete/{id}', 'SuppliersController@destroy');
Route::get('/suppliers', 'SuppliersController@index');
