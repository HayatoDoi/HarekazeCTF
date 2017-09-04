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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
Route::get('/'              , 'HomeController@show')  ->name('home');
// Route::get('rule'           , 'HomeController@rule')  ->name('rule');
// Route::get('help'           , 'HomeController@help')  ->name('help');
// Route::get('about'          , 'HomeController@about') ->name('about');
// Route::get('ranking'        , 'UserController@ranking')     ->name('ranking');
// Route::get('user/{user}'    , 'UserController@show')        ->name('users.show');
// Route::resource('contacts'  , 'ContactController',  ['only' => ['index', 'store']]);
// Route::resource('questions' , 'QuestionController', ['only' => ['index', 'show', 'store']]);
// // ログイン状態の'admin'ユーザーのみアクセス可能
// Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Admin'], function () {
//     Route::resource('admin/questions', 'QuestionController');
// });
