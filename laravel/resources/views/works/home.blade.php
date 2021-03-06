@extends('app')
@section('title', 'mydev')

@include('header')
@section('content')
<div class="contents">
  <!-- hero -->
  <section class="hero">
    <div class="wrapper hero__inner">
      <h1 class="hero__ttl">さぁ、自分のプロダクトを公開しよう</h1>
      <div class="hero__img">
        <img src="/images/undraw_Designer_life_re_6ywf.png">
      </div>
      <p class="contents__txt">mydevは、自身で開発したサービスや制作物をより世間にに知ってもらいやすくするサービスです！自身のサービス、制作物を公開して、みんなに知ってもらい意見をもらいましょう！</p>
      <a href="{{ route('register') }}" class="btn btn--hero">
        はじめる
      </a>
      <p class="contents__txt__small">（無料で使用できます）</p>
    </div>
  </section>

  <!-- detail -->
  <section class="detail">
    <div class="wrapper detail__inner">
      <h2 class="detail__ttl">For everyone.</h2>
      <p class="contents__txt">サービス、制作物とはデザイナーやアーティストだけのものではありません。mydevは全ての人のための共有の場です。エンジニア、起業家、マーケター、写真家、イラストレーター、学生…、誰にでも使用できるサービスです</p>
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
            <img src="/images/undraw_Social_share_re_qb4v.png">
          </div>
          <h3 class="features__flex__ttl">twitterへの投稿</h3>
          <p class="features__flex__txt">投稿の際にtwitterへの投稿を許可すると、自身のサービスや制作物をmydevのtwitterで紹介いたします！</p>
        </li>
        <li class="features__flex__list">
          <div class="features__flex__img">
            <img src="/images/undraw_trends_a5mf.png">
          </div>
          <h3 class="features__flex__ttl">トピックを紐づけ</h3>
          <p class="features__flex__txt">自身のサービスや制作物にタグを指定すれば、どんなツールや技術を使ったのか一目で分かります。同じトピックを持つ作品を探すこともできます。</p>
        </li>
        <li class="features__flex__list">
          <div class="features__flex__img">
            <img src="/images/undraw_Resume_re_hkth.png">
          </div>
          <h3 class="features__flex__ttl">履歴書にだって</h3>
          <p class="features__flex__txt">堅苦しい紙の履歴書なんかより、経験や制作物をストックしたmydevの方が遥かにあなたの魅力を伝えてくれるはずです。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- popular -->
  <section class="popular">
    <h2 class="popular__ttl">Let's explore.</h2>
    <ul class="card-scroll">
      @foreach($works as $work)
      @include('works.card_big')
      @endforeach
    </ul>
  </section>

  <!-- start -->
  <section class="start">
    <div class="wrapper start__inner">
      <div class="start__img">
        <img src="/images/default.png">
      </div>
      <h2 class="start__ttl">Let's get started</h2>
      <a href="{{ route('register') }}" class="btn btn--hero">はじめる</a>
    </div>
  </section>
  @include('footer')
</div>
@endsection
