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

// ユーザー認証関連
Auth::routes();

// トップページ表示
Route::get('/', 'WorkController@home');

//CRUD関連
Route::resource('/works', 'WorkController')->middleware('auth');
