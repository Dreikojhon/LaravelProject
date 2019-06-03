<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
});

Route::get('/usuarios','UserController@index')
    ->name('users.index')
    ->middleware('auth');

Route::get('/usuarios/{id}','UserController@show')
    ->where('id', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo','UserController@create')
    ->name('users.create')
    ->middleware('test');

Route::get('/usuarios/{user}/editar','UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}','UserController@update');

Route::post('/usuarios','UserController@store');

Route::delete('/usuarios/{user}','UserController@destroy')->name('users.destroy');

Route::get('/saludo/{name}/{nickname}', 'WelcomeController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
