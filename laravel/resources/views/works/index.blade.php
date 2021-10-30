@extends('app')
@section('title', '作品ページ')
@include('header')
@section('content')
<div class="contents home">
  <div class="wrapper">
    <!-- カルーセル箇所 -->
    <div class="home__carousel">
    </div>

    <!-- プロダウト一覧箇所 -->
    <div class="home__works">
      <h1 class="home__works__ttl">Popular works</h1>
      <ul class="tab">
        <li class="active">Popular</li>
        <li>Weekly</li>
        <li>All</li>
      </ul>
      <div class="area">
        <div class="area__content show">
          <ul class="area__content__flex">
            @foreach($works as $work)
            <li class="card-item card-item--works">
              <a href="#">
                <div class="card-item__img">
                  <img src="{{ $work->cover_img }}">
                </div>
                <div class="card-item__info">
                  <h3 class="card-item__info__ttl">{{ $work->title }}</h3>
                </div>
              </a>
              <a class="card-item__below" href="#">
                <div class="card-item__below__img">
                  <img src="{{ $work->icon_img }}">
                </div>
                <div class="card-item__below__txt">
                  <div class="name">{{ $work->user->name }}</div>
                  <div class="sub">{{ $work->user->desc }}</div>
                </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="area__content">
          <ul class="area__content__flex">
            @foreach($works as $work)
            <li class="card-item card-item--works">
              <a href="#">
                <div class="card-item__img">
                  <img src="{{ $work->cover_img }}">
                </div>
                <div class="card-item__info">
                  <h3 class="card-item__info__ttl">{{ $work->title }}</h3>
                </div>
              </a>
              <a class="card-item__below" href="#">
                <div class="card-item__below__img">
                  <img src="{{ $work->icon_img }}">
                </div>
                <div class="card-item__below__txt">
                  <div class="name">{{ $work->user->name }}</div>
                  <div class="sub">{{ $work->user->desc }}</div>
                </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="area__content">
          <ul class="area__content__flex">
            @foreach($works as $work)
            <li class="card-item card-item--works">
              <a href="#">
                <div class="card-item__img">
                  <img src="{{ $work->cover_img }}">
                </div>
                <div class="card-item__info">
                  <h3 class="card-item__info__ttl">{{ $work->title }}</h3>
                </div>
              </a>
              <a class="card-item__below" href="#">
                <div class="card-item__below__img">
                  <img src="{{ $work->icon_img }}">
                </div>
                <div class="card-item__below__txt">
                  <div class="name">{{ $work->user->name }}</div>
                  <div class="sub">{{ $work->user->desc }}</div>
                </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <!-- 新着プロダクト一覧箇所 -->
    <div class="home__works_new">

    </div>
    <!-- popular tags -->
    <div class="home__popular_tags">

    </div>
  </div>
</div>
@endsection
