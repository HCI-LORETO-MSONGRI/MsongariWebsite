<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index', function () {
    return view('index');
});


Route::view('history', 'about/history');
Route::view('philosophy', 'about/philosophy');
Route::view('vision', 'about/vision');


//Route::view('parents', 'admissions/parents');
Route::get('parents', 'DataController@getSchools');
Route::get('parents', 'DataController@getSchools');
Route::post('parents','parentsDetailsController@store');
Route::get('dropdownlist','DataController@getSchools');
Route::get('dropdownlist/getclasses/{id}','DataController@getClasses');

