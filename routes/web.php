<?php


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'MessageControler@store')->name('messages.store');


