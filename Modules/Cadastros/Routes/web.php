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
    // Clientes
    Route::group(['prefix'=>'client'], function()
    {
        Route::get('/', 'ClientsController@index')->name('client');
        Route::get('/create', 'ClientsController@create')->name('client.create');
        Route::post('/', 'ClientsController@store')->name('client.store');
        Route::get('/{id}', 'ClientsController@show')->name('client.show');
        Route::get('/{id}/edit', 'ClientsController@edit')->name('client.edit');
        Route::put('/{id}', 'ClientsController@update')->name('client.update');
        Route::delete('/{id}', 'ClientsController@destroy')->name('client.destroy');
    });
    // Colaboradores
    Route::group(['prefix'=>'person'], function()
    {
        Route::get('/', 'PersonController@index')->name('person');
        Route::get('/create', 'PersonController@create')->name('person.create');
        Route::post('/', 'PersonController@store')->name('person.store');
        Route::get('/{id}', 'PersonController@show')->name('person.show');
        Route::get('/{id}/edit', 'PersonController@edit')->name('person.edit');
        Route::put('/{id}', 'PersonController@update')->name('person.update');
        Route::delete('/{id}', 'PersonController@destroy')->name('person.destroy');
    });
    // Fornecedores
    Route::group(['prefix'=>'provider'], function()
    {
        Route::get('/', 'ProvidersController@index')         ->name('provider');
        Route::get('/create', 'ProvidersController@create')  ->name('provider.create');
        Route::post('/', 'ProvidersController@store')        ->name('provider.store');
        Route::get('/{id}', 'ProvidersController@show')      ->name('provider.show');
        Route::get('/{id}/edit', 'ProvidersController@edit') ->name('provider.edit');
        Route::put('/{id}', 'ProvidersController@update')    ->name('provider.update');
        Route::delete('/{id}', 'ProvidersController@destroy')->name('provider.destroy');
    });
});
