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
        <div class="area__popular show">popular</div>
        <div class="area__weekly">weekly</div>
        <div class="area__all">all</div>
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
