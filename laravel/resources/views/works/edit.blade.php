@extends('app')
@section('title', 'プロダクト更新ページ')
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    @include('error_list')
    <div class="create-work">
      <form method="POST" action="{{ route('works.update', ['work' => $work]) }}" enctype="multipart/form-data">
        @method('PATCH')
        @include('works.form')
        <button class="btn" type="submit">
          更新する
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
