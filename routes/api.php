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
Route::prefix('/v1')->group(function(){
    Route::get('/products','ProductsController@index');
    Route::post('/products','ProductsController@store');
    Route::put('/products/id/{id}','ProductsController@update');
    Route::get('/products/id/{id}','ProductsController@show');
    Route::delete('/products/id/{id}','ProductsController@destroy');

    Route::resources([
        'users'=> 'UsersController',
    ]);


});

