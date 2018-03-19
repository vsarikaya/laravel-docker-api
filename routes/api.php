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

Route::post('userLogin', 'Api\V1\UserController@getTokenByUserAttributes');

Route::group(['middleware' => ['auth:api'], 'namespace' => 'Api\V1'], function(){
    Route::post('/category/getAllCategories', 'CategoryController@getAllCategories');
    Route::post('/category/getCategoryWithMusicsByCategoryId', 'CategoryController@getCategoryWithMusicsByCategoryId');
    Route::post('/category/addOrRemoveFromFavoriteList', 'CategoryController@addOrRemoveFromFavoriteList');
});
