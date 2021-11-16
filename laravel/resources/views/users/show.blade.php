@extends('app')
@section('title', $user->name)
@include('header')
@section('content')
<div class="contents">
  <div class="wrapper">
    <div class="user-card">
      <h1>これは{{ $user->name }}のユーザーページです！</h1>
      <a href="{{ route('users.edit', ['user' => $user, 'name' => Auth::user()->name]) }}" class="btn">ユーザー編集画面</a>
      @if (Auth::id() !== $user->id)
      <follow-button :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))' :authorized='@json(Auth::check())' endpoint="{{ route('users.follow', ['name' => $user->name]) }}">
      </follow-button>
      @endif
      <p><span>フォロー数{{ $user->count_followings }}</span>|<span>フォロワー数{{ $user->count_followers }}</span></p>
    </div>
    <div class="works-line">
      <h2>作品一覧</h2>
      <ul>
        @foreach($works as $work)
        <li class="card-item card-item--works">
          <a href="{{ route('works.show', ['work' => $work]) }}">
            <div class="card-item__img area__content__img">
              <img src="{{ '/storage/'.$work->cover_img }}">
            </div>
            <div class="card-item__info">
              <h3 class="card-item__info__ttl">{{ $work->title }}</h3>
            </div>
          </a>
          <a class="card-item__below" href="{{ route('users.show', ['name' => $user->name]) }}">
            <div class="card-item__below__img">
              <img src="https://placehold.jp/42x42.png">
            </div>
            <div class="card-item__below__txt">
              <div class="name">{{ $work->user->name }}</div>
              <div class="sub">Webデザイナー</div>
            </div>
          </a>
          <div>
            <work-like :initial-is-liked-by='@json($work->isLikedBy(Auth::user()))' :initial-count-likes='@json($work->count_likes)' :authorized='@json(Auth::check())' endpoint="{{ route('works.like', ['work' => $work]) }}">

            </work-like>
          </div>
          @if(Auth::id() === $work->user_id)
          <div class="dropdown">
            <div class="line"><i class="fas fa-ellipsis-v ellipsis"></i></div>
            <ul class="dropdown-menu">
              <li><a href="{{ route('works.edit', ['work' => $work]) }}"><i class="fas fa-pen"></i>記事を更新する
                </a></li>
              <form action="{{ route('works.destroy', ['work' => $work]) }}" method="POST">
                @csrf
                @method('DELETE')
                <li><button type="submit"><i class="fas fa-trash-alt"></i>記事を削除する</button></li>
              </form>
            </ul>
          </div>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
