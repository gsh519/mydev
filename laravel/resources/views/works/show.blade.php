@extends('app')
@section('title', '記事詳細画面')
@include('header')
@section('content')
<div class="contents">
  <div class="head-cover">
    <div class="head-cover__img">
      <img src="{{ '/storage/'.$work->cover_img }}">
    </div>
  </div>
  <div class="head-body">
    <div class="wrapper">
      <h1 class="head-body__ttl">{{ $work->title }}</h1>
      <a class="head-body__user" href="{{ route('users.show', ['name' => $work->user->name]) }}">
        <div class="head-body__user__icon">
          <img src="{{ '/storage/'.$work->user->icon_img }}">
        </div>
        <div class="head-body__user__desc">
          <div class="name">{{ $work->user->name }}</div>
          <div class="sub">Webデザイナー</div>
        </div>
      </a>
      <div class="head-body__content">
        {{ $work->body }}
      </div>
    </div>
  </div>
</div>
@endsection
