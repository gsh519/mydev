@extends('app')
@section('title', '記事詳細画面')
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    <h1>これは「{{ $work->title }}」の記事詳細画面ページです</h1>
  </div>
</div>
@endsection
