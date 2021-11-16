<?php
// ユーザー認証関連
Auth::routes();

//google認証
Route::prefix('login')->name('login.')->group(function () {
  Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
  Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

Route::prefix('register')->name('register.')->group(function () {
  Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
  Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});

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

//ユーザーページ表示
Route::prefix('users')->name('users.')->group(function () {
  Route::get('/{name}', 'UserController@show')->name('show');

  //ユーザー編集画面
  Route::get('/{name}/edit', 'UserController@edit')->name('edit');

  //ユーザー編集処理
  Route::patch('/{name}', 'UserController@update')->name('update');

  //フォロー機能
  Route::middleware('auth')->group(function () {
    Route::put('/{name}/follow', 'UserController@follow')->name('follow');
    Route::delete('/{name}/follow', 'UserController@unfollow')->name('unfollow');
  });
});
