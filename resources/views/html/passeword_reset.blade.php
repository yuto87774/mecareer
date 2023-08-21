<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.header', ['cssPath' => 'css/regist/regist2.css', 'pageTitle' => 'パスワードリセット'])
    </head>
    <body>
        <section class="register-photo" style="background-color: transparent;">
            <div class="form-container" style="margin-top: 40px;">
                <div class="image-holder" style="background: url('{{ asset('img/ps-img.jpeg') }}') left / cover no-repeat;"></div>
                <form method="post" action="afterRegister.html" style="height: 525px;">
                    <h2 class="text-center" style="margin-bottom: 70px;">
                        <strong>パスワードリセット</strong>
                    </h2>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="new_password" placeholder="パスワード" required="">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="password"  name="confirm_password" placeholder="確認"  required="" style="margin-bottom: 60px;">
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">リセット</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
