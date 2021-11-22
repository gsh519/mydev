@extends('app')
@section('title', $tag->hashtag)
@include('header')
@section('content')
<div class="contents tag_area">
  <div class="wrapper">
    <h2 class="tag-name">{{ $tag->hashtag }}<span>を含むWork</span></h2>
    <p class="tag-count">作品件数<strong>{{ $tag->works->count() }}</strong>件</p>
    <ul class="area__content__flex">
      @foreach($tag->works as $work)
      @include('works.card')
      @endforeach
    </ul>
  </div>
</div>
@endsection
