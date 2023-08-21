<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/contactComplete.css', 'pageTitle' => 'ユーザーブックマーク'])
    </head>
    <body>
        <header>
            @include('html.common.header')
        </header>
        <div class="container" style="margin-top: 20px;transform:scale(0.8);">
            <div class="row">
                <div class="col-12 mx-auto" style="width: 80%;">
                    <div style="text-align: center;margin-bottom: 15px;">
                        <img style="height: 320px;border-radius: 20px;background: url(&quot;assets/img/OIP.jpeg&quot;) center / cover no-repeat;width: 100%;">
                    </div>
                    <div class="d-flex">
                        <div style="margin-right: 8px;">
                            <p style="border-radius: 15px;padding-left: 10px;padding-right: 10px;">Paragraphhhhh</p>
                        </div>
                        <div>
                            <p style="border-radius: 15px;padding-right: 10px;padding-left: 10px;">Paragraph</p>
                        </div>
                    </div>
                    <div class="d-flex" style="margin-top: 18px;padding-bottom: 27px;">
                        <img width="100" height="80" style="width: 32px;height: 32px;margin-left: 0px;background: url(&quot;assets/img/company-icon.png&quot;);">
                        <h1 class="fs-4" style="width: 80%;margin-left: 10px;">Heading</h1>
                    </div>
                    <h4>テキストテキストテキスト</h4>
                    <p style="border-style: none;">
                        テキストああああああああああああああああああ<br>てきすと
                    </p>
                    <div class="d-flex justify-content-around" style="margin-bottom: 10px;"></div>
                    <div class="d-flex justify-content-between align-items-center align-items-md-center align-items-xxl-center" style="margin-bottom: 25px;">
                        <p style="border-style: none;">締切 2023/06/07</p>
                        <div style="margin-right: 20%;">
                            <img>
                        </div>
                    </div>
                    <div style="border-bottom: 1.4px solid rgb(173,173,173) ;"></div>
                </div>
            </div>
        </div>
    </body>
</html>
