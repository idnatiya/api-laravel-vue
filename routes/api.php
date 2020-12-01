<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('request.logs')->group(function() {
	Route::resource('movies', \App\Http\Controllers\Api\MoviesController::class); 
}); 

Route::get('request-logs', '\App\Http\Controllers\Api\RequestLogsController@index'); 
