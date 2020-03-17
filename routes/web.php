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

Route::group(['middleware'=>['web']], function (){
    Route::get('/', 'HomeController@index')->name('home');


    Route::get('/Articles',[

    'uses'=> 'ArticleController@index',
    'as'=>'articles',
    'middleware'=>'auth']);

    Route::get('/contact',[
        'uses'=>'ContactController@index',
    'as'=>'contact',
    ]);

    Route::get('/Articles/{post_name}', 'ArticleController@show')->name('show_articles');

    Route::post('/request','ContactController@ContactRequest')->name('Request');


    Route::get('/sign','UserController@index')->name('sign');
    Route::post('/signup','UserController@SignUp')->name('signup');
    Route::post('/signin','UserController@SignIn')->name('signin');

});






