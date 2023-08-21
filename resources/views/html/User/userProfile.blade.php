<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/user/userProfile.css', 'pageTitle' => 'userProfile'])
    </head>
    <body>
        <header>
            @include('html.common.header')
        </header>
        <div class="profile-card">
            <div class="profile-back" style="height: 350px;background: url('{{ asset('img/ps-img.jpeg') }}') center / cover no-repeat;"></div>
            <div class="d-flex align-items-xxl-center">
                <img class="rounded-circle profile-pic" src="{{ asset('img/face.jpg') }}" style="margin-left: 55px;">
                <button class="btn btn-primary d-xxl-flex align-items-xxl-center" type="button" style="max-height: 35px;margin-top: 47px;margin-left: 15px;" onclick="location.href='{{ route('basicInformation') }}'">基本情報</button>
                <button class="btn btn-primary d-xxl-flex align-items-xxl-center" type="button" style="max-height: 35px;margin-left: auto;margin-top: 47px;margin-right: 40px;">Button</button>
            </div>
            <h3 class="text-center profile-name" style="width: 149px;margin-left: 55px;background: rgb(255,255,255);color: var(--bs-body-color);border-width: 0.4px;border-style: solid;">田中一郎</h3>
            <h3 class="text-center profile-name" style="width: 149px;margin-left: 55px;color: var(--bs-body-color);background: var(--bs-body-bg);border-width: 0.4px;border-style: solid;">専門</h3>
        </div>
        <div class="container" style="padding-right: 10%;padding-left: 5%;margin-top: 28px;">
            <div class="row" style="margin-bottom: 16px;">
                <div class="col-md-12">
                    <h2>あなたについて</h2>
                    <p style="height: 150px;">自己紹介</p>
                </div>
            </div>
            <div class="row" style="margin-bottom: 35px;">
                <div class="col">
                    <h2 style="margin-top: 30px;text-align: left;">学んできたこと・経験したこと</h2>
                    <p style="border-style: none;">Paragraph</p>
                    <img class="d-flex d-xxl-flex justify-content-start justify-content-xxl-start" style="width: 66%;height: 200px;border-radius: 44px;margin-bottom: 30px;">
                    <div class="d-flex" style="width: 100%;height: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="width: 80px;">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-bottom: 40px;margin-top: 35px;">
                <div class="col">
                    <p style="border-style: none;">Paragraph</p>
                    <img class="d-flex d-xxl-flex justify-content-start justify-content-xxl-start" style="width: 66%;height: 200px;border-radius: 44px;margin-bottom: 30px;">
                    <div class="d-flex" style="width: 100%;height: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="margin-right: 10px;width: 80px;">
                        <img style="width: 80px;">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h2>スキル・資格</h2>
                    <ul style="list-style-type: none;">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="border-radius: 50%;background: url(&quot;assets/img/cd-top-arrow.svg&quot;) center no-repeat, rgba(96,93,255,0.8);" href="#0">Top</a>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
</html>
