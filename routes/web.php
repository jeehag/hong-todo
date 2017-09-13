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

Route::get('/', 'TaskController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::get('/task/{task}', 'TaskController@show');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::put('/task/{task}', 'TaskController@update');

//완료 및 되돌리기
Route::post('/task/complete/{completeId}', 'TaskController@complete');
Route::post('/task/uncomplete/{unCompleteId}', 'TaskController@uncomplete');

// #인증 관련 tasks로 리다이렉트