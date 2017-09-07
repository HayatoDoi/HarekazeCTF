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
Route::get('questions'              , 'AnswerController@index');
Route::get('questions/{id}'              , 'AnswerController@showAnswerForm');
Route::post('questions/{id}'              , 'AnswerController@answer');
Route::get('ranking'        , 'RankingController@index');

// // ログイン状態の'master'ユーザーのみアクセス可能
Route::group(['middleware' => ['auth', 'can:master'] ], function ()
{
    Route::get('control'              , 'MasterController@show')  ->name('control');
    Route::resource('control/questions', 'QuestionController');

    //ユーザの権限編集ができる
    Route::group(['middleware' => ['auth', 'can:owner'] ], function ()
    {
        Route::get('control/user'              , 'UserController@index');
        Route::put('control/user/update/{id}', 'UserController@update');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
