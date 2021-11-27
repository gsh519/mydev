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
        @include('works.carousel')
        @endforeach
      </ul>
    </div>
  </div>

  <!-- プロダウト一覧箇所 -->
  <div class="home__works">
    <div class="wrapper">
      <h1 class="home__works__ttl active">Popular works</h1>
      <h1 class="home__works__ttl">Weekly works</h1>
      <h1 class="home__works__ttl">Today works</h1>
      <ul class="tab">
        <li class="active">Popular</li>
        <li>Weekly</li>
        <li>Today</li>
      </ul>
      <div class="area">
        <div class="area__content popular-work show">
          <ul class="area__content__flex" id="popular-works">
            @foreach($popular_works as $work)
            @include('works.card')
            @endforeach
          </ul>
          <div class="area__btn">
            <button class="btn btn--black" id="popular-btn">
              もっと見る
              <i class="fas fa-angle-right fa-strong"></i>
            </button>
          </div>
        </div>
        <div class="area__content weekly-work">
          <ul class="area__content__flex" id="weekly-works">
            @foreach($weekly_works as $work)
            @include('works.card')
            @endforeach
          </ul>
          <div class="area__btn">
            <button class="btn btn--black" id="weekly-btn">
              もっと見る
              <i class="fas fa-angle-right fa-strong"></i>
            </button>
          </div>
        </div>
        <div class="area__content today-work">
          <ul class="area__content__flex" id="today-works">
            @foreach($today_works as $work)
            @include('works.card')
            @endforeach
          </ul>
          <div class="area__btn">
            <button class="btn btn--black" id="today-btn">
              もっと見る
              <i class="fas fa-angle-right fa-strong"></i>
            </button>
          </div>
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
