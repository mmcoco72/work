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

Route::get('/', function () {
    return view('index');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/categories/{category}', 'CategoryController@index');

Route::get('/diaries', 'DiaryController@index');
Route::get('/diaries/search', 'DiaryController@search');
Route::get('/diaries/create', 'DiaryController@create');
Route::post('/diaries', 'DiaryController@store');
Route::get('/diaries/{diary}', 'DiaryController@show');
Route::get('/diaries/{diary}/edit', 'DiaryController@edit');
Route::put('/diaries/{diary}', 'DiaryController@update');
Route::delete('/diaries/{diary}', 'DiaryController@delete');

Route::get('/emotions/create', 'EmotionController@create');
Route::post('/diaries/create', 'EmotionController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
