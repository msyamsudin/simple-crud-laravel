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


Route::resource('siswa','SiswaController');

Route::get('/result', function () {
    return redirect('siswa');
});

Route::get('result/search', 'SearchController@index')->name('siswa.search');

// autocomplete search route
Route::post('siswa/fetch', 'SearchController@AutoCompleteFunc')->name('autocomplete.fetch');

// multiple delete data route
Route::post('delete/multiple', 'SiswaController@MultipleDataDelete')->name('multipledeletedata');