<nav class="navbar navbar-expand navbar-dark blue-gradient">
<a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>memo</a>
<ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth
    <li>
        <button class="dropdown-item" type="button" onclick="location.href='{{ route("users.show",["name" => Auth::user()->name]) }}'">マイページ</button>
        <button class="dropdown-item" form="logout-button" type="submit">ログアウト</button>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
    @csrf
    </form>
    @endauth
</ul>
</nav>