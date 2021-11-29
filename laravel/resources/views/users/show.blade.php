@extends('app')
@section('title', $user->name)
@include('header')
@section('content')
<div class="contents user-area">
  <div class="user-head">
    <div class="wrapper">
      <div class="user-card">
        <div class="user-card__icon">
          @if ($user->icon_img)
          <img src="{{ $user->icon_img }}" alt="アイコン画像">
          @else
          <img src="/images/default.png" alt="デフォルト画像">
          @endif
        </div>
        <div class="user-card__flex">
          <h2 class="user-card__flex__name">{{ $user->name }}</h2>
          @if (Auth::id() === $user->id)
          <a href="{{ route('users.edit', ['user' => $user, 'name' => $user->name]) }}"><i class="edit-pen fas fa-pen"></i></a>
          @endif
        </div>
        <p class="user-card__comment">{{ $user->comment }}</p>
        @if (Auth::id() === $user->id)
        <div class="user-card__add">
          <a class="btn btn--black" href="{{ route('works.create') }}">
            <i class="fas fa-plus"></i>
            add work
          </a>
        </div>
        @endif
        @if (Auth::id() !== $user->id)
        <follow-button :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))' :authorized='@json(Auth::check())' endpoint="{{ route('users.follow', ['name' => $user->name]) }}">
        </follow-button>
        @endif
        <p class="user-card__follow"><span><strong>{{ $user->count_followings }}</strong>フォロー中</span><span><strong>{{ $user->count_followers }}</strong>フォロワー</span></p>
      </div>
    </div>
  </div>
  <div class="user-works">
    <div class="wrapper">
      <div class="works-line">
        <h2 class="user-works__ttl">作品一覧</h2>
        <ul class="user-works__flex">
          @foreach($works as $work)
          @include('works.card')
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
