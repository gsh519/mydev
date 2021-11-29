@extends('app')
@section('title', '記事詳細画面')
@include('header')
@section('content')
<div class="contents">
  <div class="head-cover">
    <div class="head-cover__img">
      <img src="{{ $work->cover_img }}">
    </div>
  </div>
  <div class="head-body">
    <div class="wrapper">
      <h1 class="head-body__ttl">{{ $work->title }}</h1>
      <p class="head-body__url">サービスURL：　<a href="{{ $work->service_url }}">{{ $work->service_url }}</a></p>
      <a class="head-body__user" href="{{ route('users.show', ['name' => $work->user->name]) }}">
        <div class="head-body__user__icon">
          @if ($work->user->icon_img)
          <img src="{{ $work->user->icon_img }}">
          @else
          <img src="/images/default.png" alt="デフォルト画像">
          @endif
        </div>
        <div class="head-body__user__desc">
          <div class="name">{{ $work->user->name }}</div>
          <div class="sub">{{ $work->user->comment }}</div>
        </div>
      </a>
      <div class="head-body__user__summary">
        <p class="overview">OVERVIEW</p>
        <p>{{ $work->summary }}</p>
      </div>
      <div class="head-body__content">
        {!! nl2br($work->body) !!}
      </div>
    </div>
  </div>
  <div class="head-body__skill">
    <div class="wrapper">
      <ul class="card-scroll">
        @foreach($work->tags as $tag)
        <li class="tags-card tags-card--black">
          <a href="{{ route('tags.show', ['tag_name' => $tag->tag_name]) }}">{{ $tag->hashtag }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="head-other_works">
    <div class="wrapper">
      <h2>Other Works</h2>
      <ul class="area__content__flex">
        @foreach($other_works as $work)
        @include('works.card')
        @endforeach
      </ul>
    </div>
  </div>
  @include('footer')
</div>
@endsection
