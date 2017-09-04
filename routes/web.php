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
    return view('index');
});
Route::middleware('auth')->group(function(){

    Route::resource('residences', 'ResidenceController');
    Route::resource('realStates', 'RealStateController');
    Route::resource('residenceTypes', 'ResidenceTypeController');
});
Route::resource('people', 'PeopleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
