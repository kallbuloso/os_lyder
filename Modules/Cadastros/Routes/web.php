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

Route::group([ 'middleware' => ['web', 'auth'], 'prefix' => 'cadastros'],function() {    
    Route::get('/', 'CadastrosController@index');

    Route::group(['prefix'=>'clients'], function()
    {
        Route::get('/', 'ClientsController@index')->name('client');
        Route::get('/create', 'ClientsController@create')->name('client.create');
        Route::post('/', 'ClientsController@store')->name('client.store');
        Route::get('/{id}', 'ClientsController@show')->name('client.show');
        Route::get('/{id}/edit', 'ClientsController@edit')->name('client.edit');
        Route::put('/{id}', 'ClientsController@update')->name('client.update');
        Route::delete('/{id}', 'ClientsController@destroy')->name('client.destroy');
    });
});
