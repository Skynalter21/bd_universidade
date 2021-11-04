<?php

use App\Http\Controllers\UniversidadeController;
use App\Models\Universidade;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('universidade')->name('universidade/')->group(function() {
    Route::get('/',                             'UniversidadeController@index')->name('index');
    Route::get('/show/{universidade}',          'UniversidadeController@show')->name('show');
    Route::get('/create',                       'UniversidadeController@create')->name('create');
    Route::post('/create',                      'UniversidadeController@store')->name('store');
    Route::get('/edit/{universidadeId}',        'UniversidadeController@edit')->name('edit');
    Route::post('/edit/{universidadeId}',       'UniversidadeController@update')->name('update');
//    Route::delete('/{universidade}',              'UniversidadeController@delete')->name('delete');
});
