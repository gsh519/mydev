@extends('app')
@section('title', 'ログイン')
@include('header')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">Login</h1>

      <a class="btn signup_area__btn" href="{{ route('login.{provider}', ['provider' => 'google']) }}"><i class="fab fa-google mr-1"></i>Googleでログイン</a>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('login') }} " method="POST">
          @csrf
          <div class="user_email">
            <input placeholder="メールアドレス" type="email" id="email" name="email" required value="{{ old('email') }}">
          </div>
          <div class="user_password">
            <input placeholder="パスワード" type="password" id="password" name="password" required>
          </div>
          <div class="forget_password">
            <a href="{{ route('password.request') }}">パスワードを忘れた方はこちら</a>
          </div>
          <input type="hidden" name="remember" id="remember" value="on">
          <button class="btn signup_area__btn" type="submit">ログイン</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
