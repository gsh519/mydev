@extends('app')
@section('title', $user->nameの編集画面)
@include('header')
@section('content')
<div class="contents">
  <div class="profile">
    <div class="profile__card">
      <h1 class="profile__card__ttl">Profile</h1>
      @include('error_list')
      <div class="create-work">
        <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', ['user' => $user, 'name' => Auth::user()->name]) }}">
          @method('PATCH')
          @include('users.form')
          <div class="create-work__btn">
            <button class="btn" type="submit">
              この内容で保存する
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
