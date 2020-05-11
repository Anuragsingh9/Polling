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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signup', function(){
    return view('register');
});
Route::post('/store', 'VotersController@store');
// Route::get('/loginn', function(){
//     return view('loginn');
// });

Route::get('loginn','VotersController@showLogin');
Route::post('/checklog', 'VotersController@doLogin');
Route::get('/editor', 'EditorController@index');
Route::get('/candidate', function(){
    return view('candidate');
});

Route::post('/storevote', 'PollController@store');
Route::get('/showvote', ['as'=>'showvote','uses'=>'PollController@showresult']);



 