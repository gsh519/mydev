@extends('app')
@section('title', 'パスワード再設定')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">新しいパスワードを設定</h1>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('password.update') }} " method="POST">
          @csrf

          <input type="hidden" name="email" value="{{ $email }}">
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="user_password">
            <label for="password">新しいパスワード</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="user_password_confirm">
            <label for="password_confirmation">新しいパスワード確認用</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
          </div>
          <button class="btn" type="submit">送信</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
