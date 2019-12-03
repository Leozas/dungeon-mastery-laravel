<?php

use App\Http\Controllers\ArmorsController;
use App\Http\Controllers\AttributeDescriptionsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SpellsController;
use App\Http\Controllers\WeaponsController;
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

//Register User
Route::post('/register','Auth\RegisterController@create');

//public login
Route::post('/login','AuthenticationController@login')->name('login');

//private logout
Route::middleware('auth:api')->group(function(){
    Route::get('/logout','AuthenticationController@logout')->name('logout');
});

// show tables
Route::get('/attributes', 'AttributeDescriptionsController@show')->name('attribute'); 
Route::get('/weapons', 'WeaponsController@show')->name('weapon');
Route::get('/armors', 'ArmorsController@show')->name('armor');
Route::get('/spells', 'SpellsController@show')->name('spell');




