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

// Add TopPage.
Route::get('top', function () {
    return view('top');
});

// Hellow.
Route::get('hello/{id?}/{pass?}', 'HelloController@index');
Route::post('hello', 'HelloController@post');
/*
  Route::get('hello', function () {
  return view('hello.index');
});
*/
