@extends('app')
@section('title', $user->name)
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    <div class="user-card">
      <div class="user-card__icon">
        <img src="{{ '/storage/'.$user->icon_img }}">
      </div>
      <div class="user-card__flex">
        <h2 class="user-card__flex__name">{{ $user->name }}</h2>
        <a href="{{ route('users.edit', ['user' => $user, 'name' => Auth::user()->name]) }}"><i class="edit-pen fas fa-pen"></i></a>
      </div>
      <p class="user-card__comment">{{ $user->comment }}</p>
      @if (Auth::id() !== $user->id)
      <follow-button :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))' :authorized='@json(Auth::check())' endpoint="{{ route('users.follow', ['name' => $user->name]) }}">
      </follow-button>
      @endif
      <p class="user-card__follow"><span><strong>{{ $user->count_followings }}</strong>フォロー中</span><span><strong>{{ $user->count_followers }}</strong>フォロワー</span></p>
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
