<?php
// ユーザー認証関連
Auth::routes();

// トップページ表示
Route::get('/', 'WorkController@home');

//CRUD関連
Route::resource('/works', 'WorkController')->except(['show'])->middleware('auth');
Route::resource('/works', 'WorkController')->only(['show']);
