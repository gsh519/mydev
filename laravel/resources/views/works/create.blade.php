@extends('app')
@section('title', 'プロダクト投稿ページ')
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    @include('error_list')
    <div class="create-work">
      <form method="POST" action="{{ route('works.store') }}" enctype="multipart/form-data">
        @csrf
        @include('works.form')
        <button class="btn" type="submit">
          公開する
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
