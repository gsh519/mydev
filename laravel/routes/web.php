<?php
// ユーザー認証関連
Auth::routes();

// トップページ表示
Route::get('/', 'WorkController@home');

//CRUD関連
Route::resource('/works', 'WorkController')->except(['show'])->middleware('auth');
Route::resource('/works', 'WorkController')->only(['show']);

//いいね機能
Route::prefix('works')->name('works.')->group(function () {
  Route::put('/{work}/like', 'WorkController@like')->name('like')->middleware('auth');
  Route::delete('/{work}/like', 'WorkController@unlike')->name('unlike')->middleware('auth');
});

//タグ別一覧記事表示
Route::get('/tags/{tag_name}', 'TagController@show')->name('tags.show');
