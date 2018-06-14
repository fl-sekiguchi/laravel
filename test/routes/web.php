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

Route::get('/', function () {
    return view('welcome');
});

Route::get('beginner', 'BeginnerController@index');

Route::get('sample/model/{type?}', 'SampleController@model');

Route::get('/sample', 'SamplesController@getIndex');
Route::get('/sample/create', 'SamplesController@create');
Route::post('/sample/create', 'SamplesController@store');
Route::get('/sample/edit/{id}', 'SamplesController@edit');
Route::post('/sample/edit', 'SamplesController@update');
Route::get('/sample/delete/{id}', 'SamplesController@show');
Route::post('/sample/delete', 'SamplesController@delete');
