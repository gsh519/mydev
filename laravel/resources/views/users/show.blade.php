@extends('app')
@section('title', $user->name)
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    <div class="user-card">
      <h1>これは{{ $user->name }}のユーザーページです！</h1>
      <p>{{ $user->comment }}</p>
      <p>{{ $user->email }}</p>
      <a href="{{ route('users.edit', ['user' => $user, 'name' => Auth::user()->name]) }}" class="btn">ユーザー編集画面</a>
      @if (Auth::id() !== $user->id)
      <follow-button :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))' :authorized='@json(Auth::check())' endpoint="{{ route('users.follow', ['name' => $user->name]) }}">
      </follow-button>
      @endif
      <p><span>フォロー数{{ $user->count_followings }}</span>|<span>フォロワー数{{ $user->count_followers }}</span></p>
    </div>
    <div class="works-line">
      <h2>作品一覧</h2>
      <ul>
        @foreach($works as $work)
        @include('works.card')
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
