@extends('app')
@section('title', $tag->hashtag)
@include('header')
@section('content')
<div class="contents">
  <div>
    <h2>{{ $tag->hashtag }}</h2>
    <p>{{ $tag->works->count() }}</p>
    <ul>
      @foreach($tag->works as $work)
      @include('works.card_big')
      @endforeach
    </ul>
  </div>
</div>
@endsection
