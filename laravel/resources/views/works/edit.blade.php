@extends('app')
@section('title', 'プロダクト更新ページ')
@include('header')
@section('content')
<div class="contents">
  @include('error_list')
  <div class="create-work">
    <form method="POST" action="{{ route('works.update', ['work' => $work]) }}">
      @method('PATCH')
      @include('works.form')
      <div class="wrapper">
        <button class="btn" type="submit">
          更新する
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
