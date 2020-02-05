<?php


Route::view('/','home')->name('home');
Route::view('/Quienes-somos','about')->name('about');
Route::view('/contacto','contact')->name('contact');
// Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');
Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');//le da el id de la tabla projects

Route::post('contact', 'MessageController@store')->name('messages.store');
