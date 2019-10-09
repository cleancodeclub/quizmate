<?php

Route::get('/questions/create', 'QuestionsController@create')->name('admin.questions.create');
Route::post('/questions', 'QuestionsController@store')->name('admin.questions.store');
Route::get('/questions/{id}/edit', 'QuestionsController@edit')->name('admin.questions.edit');
Route::patch('/questions/{id}/', 'QuestionsController@update')->name('admin.questions.update');
Route::delete('/questions/{id}/destroy', 'QuestionsController@destroy')->name('admin.questions.destroy');


Route::get('/categories/create', 'CategoryController@create')->name('admin.categories.create');
Route::post('/categories', 'CategoryController@store')->name('admin.categories.create');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard.create');
