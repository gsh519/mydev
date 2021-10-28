@extends('app')
@section('title', 'ユーザー登録')
@include('header')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">Welcome!</h1>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('register') }} " method="POST">
          @csrf
          <div class="user_name">
            <label for="name">ユーザー名</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}">
          </div>
          <div class="user_email">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
          </div>
          <div class="user_password">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="user_password_confirm">
            <label for="password_confirmation">パスワード確認</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
          </div>
          <button class="btn" type="submit">ユーザー登録</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
