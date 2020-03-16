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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home');

//Route::resource('Articles', 'PostsController');

Route::get('/Articles', 'ArticleController@index')->name('articles');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/Articles/{post_name}', 'ArticleController@show')->name('show_articles');

Route::post('/request','ContactController@ContactRequest')->name('Request');




