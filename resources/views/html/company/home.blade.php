
<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/company/home.css', 'pageTitle' => '企業ホーム'])
    </head>
    <body>
        <header>
            @include('html.common.companyheader')
        </header>
        <div>
            <p style="margin-top:50px; background: #a0efef;text-align: center;height: 37px;padding-top: 2px;">Paragraph</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-4" id="col1" style="max-height: 650px;overflow-y: scroll;height: 650px;">
                    <form class="search-form">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="名前">
                            <button class="btn btn-light" type="button" style="background: #a0efef;">検索</button>
                        </div>
                    </form>
                    <div class="d-flex align-items-xxl-center" style="padding-left: 10%;">
                        <img class="rounded-circle" style="width: 50px;height: 50px;" src="assets/img/2.jpg">
                        <p style="border-style: none;margin-top: 17px;margin-left: 26px;">田中恵子</p>
                    </div>
                </div>
                <div class="col-8 col-md-8" id="col2" style="max-height: 650px;overflow-y: scroll;">
                    <form>
                        <div class="d-flex justify-content-md-start align-items-md-center">
                            <img class="rounded-circle" src="assets/img/2.jpg" style="width: 55px;">
                            <p style="margin-top: 19px;margin-left: 19px;border-style: none;">鈴木一郎さんからメッセージが来ています</p>
                            <div class="ms-auto">
                                <button class="btn btn-primary" type="button" style="margin-right: 10px;">メッセージ</button>
                                <button class="btn btn-primary" type="button">完了</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



        <!-- 変更点2: ウィンドウのサイズに応じてクラスを変更するスクリプト -->
        <script>
            $(document).ready(function() {
                function adjustContainerClass() {
                    if ($(window).width() <= 768) {
                        $('.container').addClass('container-fluid').removeClass('container');
                    } else {
                        $('.container-fluid').addClass('container').removeClass('container-fluid');
                    }
                }

                // 関数をページの読み込み時とリサイズイベント時に呼び出します。
                adjustContainerClass();
                $(window).resize(adjustContainerClass);
            });
        </script>
    </body>
</html>
