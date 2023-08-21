<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/contactComplete.css', 'pageTitle' => 'お問い合わせ完了'])
    </head>
    <body>
        <div class="container" style="margin-bottom: 19px;margin-top: 13px;">
            <div class="row" style="border-width: 8px;">
                <div class="col-md-12" style="border-radius: 10px;border: 2.4px solid rgb(244,244,244);padding-left: 9px;">
                    <header>
                        <h2 style="padding-left: 12px;margin-top: 8px;border-left: 10.4px solid #00b5a8 ;">お問い合わせ</h2>
                    </header>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="border-style: solid;border-color: #00b5a8;border-radius: 10px;padding-left: 19px;padding-top: 15px;padding-bottom: 15px;">
                    <h4 style="border-left: 5.4px solid #00b5a8;padding-left: 8px;">お問い合わせ送信完了</h4>
                    <p style="border-style: none;padding-left: 22px;margin-top: 19px;">鈴木一郎　様</p>
                    <p style="border-style: none;padding-left: 22px;">
                        お問い合わせ承りました。<br>
                        担当者よりご返答させていただきますのでしばらくお待ちください。<br>
                        <br>
                        ※お問い合わせのご回答には数日いただく場合がありますのでご了承ください。<br>※万が一、一週間たっても返信がない場合は大変お手数ですが、お電話（0000000）までご連絡ください
                    </p>
                    <button class="btn btn-primary d-flex mx-auto" onclick="location.href='{{ route('HP') }}';" type="button" style="padding-right: 5%;padding-left: 5%;margin-top: 41px;margin-bottom: 3%;">ホームに戻る</button>
                </div>
            </div>
        </div>
    </body>
</html>
