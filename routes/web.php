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
    return view('layouts.login');
});
Route::get('/log', function () {
    return view('layouts.login');
});
Route::resource('visitors','VisitorsController');
Route::post('dossier/search','VisitorsController@search')->name('visitors.search');
Route::post('dossier/searchall','VisitorsController@searchAll')->name('visitors.searchAll');
Route::get('/visitors','VisitorsController@index');
Route::get('/addVisitor', function () {
    return view('layouts.addVisitor');
});
Route::get('/search', function () {
    return view('layouts.search');
});
Auth::routes();
Route::get('/home', 'VisitorsController@index')->name('home');

