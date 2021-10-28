@extends('app')
@section('title', 'mydev')

@section('content')
@include('header')
<div class="contents">
  <!-- hero -->
  <section class="hero">
    <div class="wrapper hero__inner">
      <h1 class="hero__ttl">さぁ、自分のプロダクトを公開しよう</h1>
      <div class="hero__img">
        <img src="/images/undraw_Designer_life_re_6ywf.png">
      </div>
      <p class="contents__txt">mydevは、誰でも直感的に使えるWebポートフォリオ作成サービスです。<br>制作物や仕事のストーリーを記録して、ポートフォリオを育てていきましょう。</p>
      <a href="#" class="btn btn--hero">
        はじめる
      </a>
      <p class="contents__txt__small">（無料で使用できます）</p>
    </div>
  </section>

  <!-- detail -->
  <section class="detail">
    <div class="wrapper detail__inner">
      <h2 class="detail__ttl">For everyone.</h2>
      <p class="contents__txt">ポートフォリオはデザイナーやアーティストだけのものではありません。mydevは全ての人のためのポートフォリオ作成サービスです。エンジニア、起業家、マーケター、写真家、イラストレーター、学生…、誰にだって残しておきたい作品やストーリーがあるはずです。</p>
      <div class="detail__img">
        <img src="/images/illustration1.png">
      </div>
    </div>
  </section>

  <!-- features -->
  <section class="features">
    <div class="wrapper features__inner">
      <h2 class="features__ttl">Features</h2>
      <ul class="features__flex">
        <li class="features__flex__list">
          <div class="features__flex__img">
            <img src="/images/features-26-min.png" alt="">
          </div>
          <h3 class="features__flex__ttl">鍵付き公開</h3>
          <p class="features__flex__txt">Workページには自由に鍵をかけることもできます。鍵付きのWorkには、合言葉を知っている人のみがアクセスできます。</p>
        </li>
        <li class="features__flex__list">
          <div class="features__flex__img">
            <img src="/images/features-27-min.png" alt="">
          </div>
          <h3 class="features__flex__ttl">トピックを紐づけ</h3>
          <p class="features__flex__txt">Workにトピックを指定すれば、どんなツールや技術を使ったのか一目で分かります。同じトピックを持つWorkを探すこともできます。</p>
        </li>
        <li class="features__flex__list">
          <div class="features__flex__img">
            <img src="/images/features-28-min.png" alt="">
          </div>
          <h3 class="features__flex__ttl">何よりの履歴書に</h3>
          <p class="features__flex__txt">堅苦しい紙の履歴書なんかより、経験や制作物をストックしたRESUMEの方が遥かにあなたの魅力を伝えてくれるはずです。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- popular -->
  <section class="popular">
    <h2 class="popular__ttl">Let's explore.</h2>
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
    <div class="btn-wrap">
      <a class="btn btn--black" href="#">
        人気のプロダクトをチェック
      </a>
    </div>
  </section>

  <!-- start -->
  <section class="start">
    <div class="wrapper start__inner">
      <div class="start__img">
        <img src="/images/default.png">
      </div>
      <h2 class="start__ttl">Let's get started</h2>
      <a href="#" class="btn btn--hero">はじめる</a>
    </div>
  </section>

  @include('footer')
</div>
@endsection
