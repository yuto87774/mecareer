<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">

<head>
    @include('html.common.head', ['cssPath' => 'css/regist/regist3.css', 'pageTitle' => '新規登録ページ'])
</head>

<body style="margin-top: 0;">
    <div class="container"
        style="margin-right: 0;margin-left: 0;padding-right: 0;padding-left: 10%;margin-top: 108px;text-align: center;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="margin-bottom: 60px;">新規登録</h2>
                <div class="d-flex justify-content-lg-center">
                    <img src="{{ asset('img/completion-icon.png') }}" style="height: 40px;">
                    <p style="border-style: none;margin-left: 22px;margin-top: 7px;font-size: 20px;">新規登録が完了しました</p>
                </div>
                <p style="border-style: none;">
                    <br>
                    登録いただいたメールアドレス宛に<br>
                    登録完了のメールをお送りいたしましたのでご確認ください<br>
                    <br>
                </p>
                <div class="d-lg-flex mx-auto form-group mb-3" style="width: 30%;margin-top: 35px;">
                    <button class="btn btn-primary d-block w-100" id="submitButton" type="submit" onclick="{{ route('companyhome') }}" style="background: linear-gradient(172deg, rgba(22, 195, 206, 0.88) 0%, rgba(22, 195, 206, 0.88) 20.93%, #94DEB1 90.72%);">
                        トップページへ
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
