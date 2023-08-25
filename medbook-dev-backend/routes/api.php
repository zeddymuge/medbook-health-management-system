<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 
// GenderController routes
Route::get('/genders', 'GenderController@index');
Route::post('/genders', 'GenderController@store');
Route::get('/genders/{id}', 'GenderController@show');
Route::put('/genders/{id}', 'GenderController@update');
Route::delete('/genders/{id}', 'GenderController@destroy');

// ServiceController routes
Route::get('/services', 'ServiceController@index');
Route::post('/services', 'ServiceController@store');
Route::get('/services/{id}', 'ServiceController@show');
Route::put('/services/{id}', 'ServiceController@update');
Route::delete('/services/{id}', 'ServiceController@destroy');

// Additional features
Route::middleware('auth.basic')->group(function () {
    Route::get('/patients', 'PatientController@index');
    Route::get('/patients/search', 'PatientController@search');
    Route::post('/patients', 'PatientController@store');
   
});