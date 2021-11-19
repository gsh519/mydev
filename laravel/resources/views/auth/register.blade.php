@extends('app')
@section('title', 'ユーザー登録')
@include('header')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">SignUp!</h1>

      <a class="btn signup_area__btn" href="{{ route('login.{provider}', ['provider' => 'google']) }}"><i class="fab fa-google mr-1"></i>Googleで登録</a>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('register') }} " method="POST">
          @csrf
          <div class="user_name">
            <input placeholder="ユーザー名" type="text" id="name" name="name" required value="{{ old('name') }}">
          </div>
          <div class="user_email">
            <!-- <label for="email">メールアドレス</label> -->
            <input placeholder="メールアドレス" type="email" id="email" name="email" required value="{{ old('email') }}">
          </div>
          <div class="user_password">
            <!-- <label for="password">パスワード</label> -->
            <input placeholder="パスワード" type="password" id="password" name="password" required>
          </div>
          <div class="user_password_confirm">
            <!-- <label for="password_confirmation">パスワード確認</label> -->
            <input placeholder="パスワード確認" type="password" id="password_confirmation" name="password_confirmation" required>
          </div>
          <button class="btn signup_area__btn" type="submit">ユーザー登録</button>
          <a class="btn signup_area__btn signup_area__btn--last" href="{{ route('login') }}">アカウントをお持ちの方はこちら</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
