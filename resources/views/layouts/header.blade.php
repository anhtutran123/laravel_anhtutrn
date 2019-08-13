<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="btn btn-outline-light">@yield('title')</div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @yield('index')">
                    <a class="nav-link" href="{{ route('users.index') }}">Danh sách</a>
                </li>
                <li class="nav-item @yield('create')">
                    <a class="nav-link" href="{{ route('users.create') }}">Thêm</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
