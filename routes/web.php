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

//利用者一覧
Route::get('/user','UserController@index');

//予約一覧
Route::get('/reserve','ReservationController@index');

//予約詳細一覧
Route::get('/detail','DetailController@index');

//利用者登録
Route::get('user/add','UserController@add');
Route::post('user/add', 'UserController@create');

//予約追加
Route::get('reserve/add','ReservationController@add');
Route::post('reserve/add', 'ReservationController@create');