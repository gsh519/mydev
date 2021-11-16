@extends('app')
@section('title', $user->nameの編集画面)
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    <h1>{{ $user->name }}の編集画面ですよー</h1>
    @include('error_list')
    <div class="create-work">
      <form method="POST" action="">
        @method('PATCH')
        @include('users.form')
        <button class="btn" type="submit">
          保存する
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
