<?php


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
// Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');//le da el id de la tabla projects

Route::post('contact', 'MessageController@store');
