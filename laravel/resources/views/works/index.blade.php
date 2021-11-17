@extends('app')
@section('title', '作品ページ')
@include('header')
@section('content')
<div class="contents home">

  <!-- カルーセル箇所 -->
  <div class="home__carousel">
    <div class="wrapper">
      <ul class="slider mypattern">
        @foreach($carousel_works as $work)
        <li>
          <a href="{{ route('works.show', ['work' => $work]) }}">
            <img src="{{ '/storage/'.$work->cover_img }}">
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>

  <!-- プロダウト一覧箇所 -->
  <div class="home__works">
    <div class="wrapper">
      <h1 class="home__works__ttl">Popular works</h1>
      <ul class="tab">
        <li class="active">Popular</li>
        <li>Weekly</li>
        <li>Today</li>
      </ul>
      <div class="area">
        <div class="area__content show">
          <ul class="area__content__flex">
            @foreach($popular_works as $work)
            @include('works.card')
            @endforeach
          </ul>
        </div>
        <div class="area__content">
          <ul class="area__content__flex">
            @foreach($weekly_works as $work)
            @include('works.card')
            @endforeach
          </ul>
        </div>
        <div class="area__content">
          <ul class="area__content__flex">
            @foreach($today_works as $work)
            @include('works.card')
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- 新着プロダクト一覧箇所 -->
  <div class="home__works_new">
    <div class="wrapper">
      <h2 class="home__works_new__ttl">
        New works
      </h2>
    </div>
    <div class="home__works_new__scroll">
      <ul class="card-scroll">
        @foreach($new_works as $work)
        @include('works.card_big')
        @endforeach
      </ul>
    </div>
    <div class="wrapper">
      <a class="btn btn--black" href="#">
        もっと見る
      </a>
    </div>
  </div>
  <!-- popular tags -->
  <div class="home__popular_tags">
    <div>
      <div class="wrapper">
        <h2 class="home__popular_tags__ttl">
          Popular Tags
        </h2>
      </div>
      <ul class="card-scroll home__popular_tags__scroll">
        @foreach($new_works as $work)
        @foreach($work->tags as $tag)
        <li class="tags-card">
          <a href="{{ route('tags.show', ['tag_name' => $tag->tag_name]) }}">{{ $tag->hashtag }}</a>
        </li>
        @endforeach
        @endforeach
      </ul>
    </div>

  </div>
  @include('footer')
</div>
@endsection
