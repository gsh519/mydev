@extends('app')
@section('title', 'プロダクト投稿ページ')
@include('header')
@section('content')
<div class="contents">
  @include('error_list')
  <div class="create-work">
    <form method="POST" action="{{ route('works.store') }}" enctype="multipart/form-data">
      @csrf
      @include('works.form')
      <div class="wrapper">
        <button class="btn" type="submit">
          公開する
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
