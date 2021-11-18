<header class="header">
  <div class="wrapper header__inner">
    <a href="{{ route('works.index') }}" class="header__logo">
      mydev
    </a>
    <ul class="header__nav">
      @guest
      <li class="header__nav__list">
        <a class="btn" href="{{ route('register') }}">
          はじめる
        </a>
      </li>
      @endguest
      @guest
      <li class="header__nav__list">
        <a class="btn" href="{{ route('login') }}">
          ログイン
        </a>
      </li>
      @endguest
      @auth
      <li id="icon-profile" class="header__nav__list">
        <div class="card-item__below__img">
          @if (Auth::user()->icon_img)
          <img src="{{ '/storage/'.Auth::user()->icon_img }}" alt="アイコン画像">
          @else
          <img src="/images/default.png" alt="デフォルト画像">
          @endif
        </div>
      </li>
      <!-- モーダルウィンドウ -->
      <div id="header-modal" class="modal">
        <ul>
          <li>
            <a class="icon" href="{{ route('users.show', ['name' => Auth::user()->name]) }}">
              プロフィール設定
            </a>
          </li>
          <li>
            <button form="logout-button" type="submit">
              ログアウト
            </button>
            <form id="logout-button" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </li>
        </ul>
      </div>
      @endauth
      @auth
      <li class="header__nav__list">
        <a class="btn" href="{{ route('works.create') }}">
          <i class="fas fa-plus"></i>
          add work
        </a>
      </li>
      @endauth
    </ul>
  </div>
</header>
