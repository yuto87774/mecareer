<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/regist/registAuthenticationKey.css', 'pageTitle' => '新規登録ページ'])
    </head>
    <body>
        <section class="register-photo" style="background-color: transparent;">
            <div class="form-container" style="margin-top: 40px;">
                <div class="image-holder" style="background: url('{{ asset('img/ps-img.jpeg') }}') left / cover no-repeat;"></div>
                <form method="post" action="{{ route('completeRegistration') }}" style="height: 525px;">
                    {{ csrf_field() }}
                    <h2 class="text-center">
                        <strong>新規登録</strong>
                    </h2>
                    <p style="border-style: none;font-size: 12px;margin-top: 70px;">{{ $email }}に送信された認証コードを入力してください</p>
                    <div class="form-group mb-3">
                        <input class="form-control" type="number" name="token" placeholder="認証コード" required="">
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background: linear-gradient(172deg, rgba(22, 195, 206, 0.88) 0%, rgba(22, 195, 206, 0.88) 20.93%, #94DEB1 90.72%);">アカウント作成</button>
                    </div>
                    <a class="d-block d-lg-flex justify-content-lg-center" href="{{ route('reVcode') }}">コード再送信</a>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
