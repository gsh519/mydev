@extends('app')
@section('title', 'ログイン')
@include('header')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">Welcome!</h1>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('login') }} " method="POST">
          @csrf
          <div class="user_email">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
          </div>
          <div class="user_password">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
          </div>
          <input type="hidden" name="remember" id="remember" value="on">
          <button class="btn" type="submit">ログイン</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
