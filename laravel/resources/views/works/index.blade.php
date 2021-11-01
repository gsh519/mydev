@extends('app')
@section('title', '作品ページ')
@include('header')
@section('content')
<div class="contents home">

  <!-- カルーセル箇所 -->
  <div class="home__carousel">
    <div class="wrapper">
      <ul class="slider mypattern">
        <li>
          <a href="#">
            <img src="https://placehold.jp/300x167.png">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://placehold.jp/300x167.png">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://placehold.jp/300x167.png">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://placehold.jp/300x167.png">
          </a>
        </li>
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
        @foreach($works as $work)
        <li class="card-item">
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
    <div class="wrapper">
      <a class="btn btn--black" href="#">
        もっと見る
      </a>
    </div>
  </div>
  <!-- popular tags -->
  <div class="home__popular_tags">
    <div class="wrapper">
      <h2 class="home__popular_tags__ttl">
        Popular Tags
      </h2>
      <ul class="card-scroll home__popular_tags__scroll">
        <li class="tags-card">
          <a href="#">PHP</a>
        </li>
        <li class="tags-card">
          <a href="#">HTML</a>
        </li>
        <li class="tags-card">
          <a href="#">CSS</a>
        </li>
        <li class="tags-card">
          <a href="#">photoshop</a>
        </li>
        <li class="tags-card">
          <a href="#">illustrator</a>
        </li>
        <li class="tags-card">
          <a href="#">pytho</a>
        </li>
        <li class="tags-card">
          <a href="#">ruby</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
        <li class="tags-card">
          <a href="#">javascript</a>
        </li>
      </ul>
    </div>

  </div>
  @include('footer')
</div>
@endsection
