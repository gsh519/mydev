@extends('app')
@section('title', 'ユーザー登録')
@include('header')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">ユーザー登録</h1>

      <!-- エラー表示 -->
      @include('error_list')

      <div class="signup_area__form">
        <form action="{{ route('register.{provider}', ['provider' => $provider]) }}" method="POST">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="user_name">
            <label for="name">ユーザー名</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="user_email">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" disabled value="{{ $email }}">
          </div>
          <button class="btn" type="submit">ユーザー登録</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
