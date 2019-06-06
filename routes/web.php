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


Route::get('/', 'PageController@home');
Route::get('info', 'PageController@info');
Route::get('surprise', 'PageController@surprise');
Route::get('import', 'ImportController');

Route::resource('buildings', 'BuildingController')->except(['edit', 'update', 'destroy']);

Route::get('image-test', function(){
    return view('image');
});