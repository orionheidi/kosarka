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
    return view('welcome');
});

Route::group(['middleware' => ['guest']],function(){
    Route::get('/register','RegisterController@create')->name('show-register');
    Route::post('/register','RegisterController@store')->name('register');
    Route::get('/login','LoginController@create')->name('show-login');
    Route::post('/login','LoginController@store')->name('login');
});

Route::group(['middleware' => ['auth']],function(){
    Route::get('/teams','TeamsController@index')->name('teams-index');
    Route::get('teams/{id}','TeamsController@show')->name('teams-show');
    Route::get('/players/{id}','PlayersController@show')->name('players-show');
    Route::post('teams/{id}/comments','CommentsController@store')->name('comments-store');
    Route::get('/team/news/{id}','TeamNewsController@index')->name('team-news');
    Route::get('/teams/{id}/news','NewsController@sideBar')->name('side-bar');
    Route::get('/news','NewsController@index')->name('all-news');
    Route::get('/news/{id}','NewsController@show')->name('show-news');

});

Route::get('/verification/{verify_token}','LoginController@verification')->name('verification');

Route::get('/logout','LoginController@logout')->name('logout');