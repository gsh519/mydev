<header class="header">
  <div class="wrapper header__inner">
    <a href="/" class="header__logo">
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
      <li class="header__nav__list">
        <a class="icon" href="#">
          <i class="fas fa-user-circle"></i>
        </a>
      </li>
      @endauth
      @auth
      <li class="header__nav__list">
        <a class="btn" href="#">
          add work
        </a>
      </li>
      @endauth
      @auth
      <li class="header__nav__list">
        <button form="logout-button" class="btn" type="submit">
          ログアウト
        </button>
      </li>
      <form id="logout-button" action="{{ route('logout') }}" method="POST">
        @csrf
      </form>
      @endauth
    </ul>
  </div>
</header>
