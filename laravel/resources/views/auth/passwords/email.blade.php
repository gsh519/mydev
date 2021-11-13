@extends('app')
@section('title', 'パスワード再設定')
@section('content')
<div class="contents signup">
  <div class="wrapper signup__inner">
    <div class="signup_area">
      <h1 class="signup_area__ttl">パスワード再設定</h1>

      <!-- エラー表示 -->
      @include('error_list')

      @if (session('status'))
      <div>
        {{ session('status') }}
      </div>
      @endif

      <div class="signup_area__form">
        <form action="{{ route('password.email') }} " method="POST">
          @csrf
          <div class="user_email">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
          </div>
          <button class="btn" type="submit">メール送信</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
