<nav class="navbar navbar-expand-md fixed-top navbar-transparency navbar-light"
    style="height: 35px;padding-top: 0px;padding-bottom: 0px;">
    <div class="container">
        <div>
            <a class="navbar-brand" href="#" style="padding-bottom: 0px;">BRAND</a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1" style="height: 41px;">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main') }}">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">メッセージ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userprofile') }}">プロフィール</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userbookmark') }}">ブックマーク</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
