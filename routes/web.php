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

Route::group(['prefix' => 'backend'], function(){

    Route::get('/', 'backend\DashboardController@index');

    //memo->บันทึกข้อความ
    Route::resource('memo', 'Backend\MemoController');


    Route::get('/preview/{id}', 'Backend\ServiceController@preview');


});
