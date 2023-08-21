<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/user/basicInformation.css', 'pageTitle' => 'basicInformation'])
    </head>
    <body>
        <header>
            @include('html.common.header')
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="mx-auto" style="text-align: left;width: 672px;border-left: 7px solid #557AFE;padding-left: 14px;margin-top: 92px;">個人基本情報</h1>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">姓名</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">田中一郎</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">姓名カナ</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">田中一郎</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="mx-auto" style="text-align: left;width: 672px;border-left: 7px solid #557AFE;padding-left: 14px;margin-top: 67px;">メールアドレス・パスワード</h1>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">メールアドレス</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">123@123.com</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">パスワード</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 83px;font-weight: bold;">
                            ***********<br>パスワード保護のため非表示になっています
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="mx-auto" style="text-align: left;width: 672px;border-left: 7px solid #557AFE;padding-left: 14px;margin-top: 67px;">現在の連絡先</h1>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">郵便番号</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">000-000</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">都道府県</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">東京都</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">市町村</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">a市</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">町名</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">b市</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">丁目・番地・号</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">11-11</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">アパートマンション</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">cマンション</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">電話番号</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">000-0000-0000</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="mx-auto" style="text-align: left;width: 672px;border-left: 7px solid #557AFE;padding-left: 14px;margin-top: 67px;">学校情報</h1>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">卒業時期</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">2022年 1月～3月</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">学校区分</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">専門学校</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">学校名</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">a学校</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">学部</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">b学校</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">学科名</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">c学科</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="last">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="mx-auto" style="text-align: left;width: 672px;border-left: 7px solid #557AFE;padding-left: 14px;margin-top: 67px;">資格</h1>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="background: #D9D9D9;padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 48px;font-weight: bold;">資格</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="/*background: #D9D9D9;*/padding-bottom: 0px;/*margin: 0;*//*margin-bottom: 1px;*//*margin-top: 9px;*/width: 672px;position: static;display: flex;/*margin-left: 186px;*/padding-left: 24px;height: 60px;font-weight: bold;">a資格</p>
                        <p class="fs-4 d-lg-flex m-auto align-items-lg-center" style="padding-bottom: 0px;width: 672px;position: static;padding-left: 24px;height: 60px;font-weight: bold;">b資格</p>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
</html>
