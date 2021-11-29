<li class="home__carousel__list">
  <a href="{{ route('works.show', ['work' => $work]) }}">
    <img src="{{ $work->cover_img }}">
    <div class="home__carousel__wrap">
      <div class="home__carousel__wrap__flex">
        <div class="card-item__below__img">
          @if ($work->user->icon_img)
          <img src="{{ $work->user->icon_img }}">
          @else
          <img src="/images/default.png" alt="デフォルト画像">
          @endif
        </div>
        <div class="name">{{ $work->user->name }}</div>
      </div>
      <h2 class="home__carousel__wrap__ttl">{{ $work->title }}</h2>
    </div>
  </a>
</li>
