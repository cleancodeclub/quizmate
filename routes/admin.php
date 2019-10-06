<?php

Route::get('/questions/create', 'QuestionsController@create')->name('admin.questions.create');
Route::post('/questions', 'QuestionsController@store')->name('admin.questions.store');

Route::get('/categories/create', 'CategoryController@create')->name('admin.categories.create');
Route::post('/categories', 'CategoryController@store')->name('admin.categories.create');
