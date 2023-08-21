<nav class="navbar navbar-expand-md fixed-top navbar-transparency navbar-light"
    style="height: 35px;padding-top: 0px;padding-bottom: 0px;">
    <div class="container">

        <a class="navbar-brand" href="#" style="padding-bottom: 0px;">BRAND</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navcol-1" style="height: 41px;">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('companyhome') }}">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('companyedit') }}">募集文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">メッセージ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userprofile') }}">ブックマーク</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('company_basicinfo') }}">企業基本情報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    a.nav-link {
        text-align: end;
        margin-right: 3%;
    }
</style>
