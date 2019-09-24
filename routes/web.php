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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guide', function () {
    return view('guide');
});

// web question routes
Route::get('/question/create', 'QuestionsController@create');
Route::get('/questions', 'QuestionsController@store');

// web category routes
Route::get('/categories/create', 'CategoryController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
