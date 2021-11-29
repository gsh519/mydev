<li class="card-item card-item--works">
  <a href="{{ route('works.show', ['work' => $work]) }}">
    <div class="card-item__img area__content__img">
      <img src="{{ '/storage/'.$work->cover_img }}">
    </div>
  </a>
  <div class="card-item__active">
    <work-like :initial-is-liked-by='@json($work->isLikedBy(Auth::user()))' :initial-count-likes='@json($work->count_likes)' :authorized='@json(Auth::check())' endpoint="{{ route('works.like', ['work' => $work]) }}">
    </work-like>
    <!-- モーダルウィンドウ -->
    @if(Auth::id() === $work->user_id)
    <div class="dropdown">
      <div data-target="card{{ $work->id }}" class="line"><i class="fas fa-ellipsis-v ellipsis"></i></div>
      <ul id="card{{ $work->id }}" class="dropdown-menu">
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
  </div>
  <a href="{{ route('works.show', ['work' => $work]) }}">
    <div class="card-item__info">
      <h3 class="card-item__info__ttl">{{ $work->title }}</h3>
    </div>
  </a>
  <a class="card-item__below" href="{{ route('users.show', ['name' => $work->user->name]) }}">
    <div class="card-item__below__img">
      <img src="{{ '/storage/'.$work->user->icon_img }}">
    </div>
    <div class="card-item__below__txt">
      <div class="name">{{ $work->user->name }}</div>
      <div class="sub">{{ $work->user->comment }}</div>
    </div>
  </a>
</li>
