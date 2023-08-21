<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/regist/registFirst.css', 'pageTitle' => 'regist'])
    </head>
    <body>
        <section class="register-photo" style="background-color: transparent;">
            <div class="form-container" style="margin-top: 40px;">
                <div class="image-holder" style="background: url('{{ asset('img/ps-img.jpeg') }}') left / cover no-repeat;"></div>
                <form method="post" action="afterRegister.html" style="height: 525px;">
                    <h2 class="text-center">
                        <strong>新規登録</strong>
                    </h2>
                    <div class="form-group mb-3">
                        <input class="form-control" type="email" name="email" placeholder="メールアドレス" required="">
                    </div>
                    <script>
                        // Submit button made with javascript
                        function changePassword() {
                            var password = document.querySelector("#password").value;
                            var confirmPassword = document.querySelector("#confirmPassword").value;

                            if (password.length >= 8) {
                                if (password === confirmPassword) {
                                    var btn = $('#submitButton').removeAttr("disabled");
                                    document.querySelector('#passwordsError').style.display = 'none';
                                    console.log("enabling")
                                } else {
                                    var btn = $('#submitButton').attr("disabled", "true");
                                    document.querySelector('#passwordsError').style.display = 'block';
                                    document.querySelector('#errorMessage').innerHTML = 'The passwords do not match';
                                    console.log("disabling")
                                }
                            } else {
                                var btn = $('#submitButton').attr("disabled", "true");
                                document.querySelector('#passwordsError').style.display = 'block';
                                document.querySelector('#errorMessage').innerHTML = 'The password must be at least 8 characters long';
                                console.log("disabling")
                            }
                        }
                    </script>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" id="password" name="password" placeholder="パスワード" onchange="changePassword()" required="">
                    </div>
                    <div id="passwordsError" style="display: none;margin-bottom: 16.5px;">
                        <span id="errorMessage" class="text-danger" style="font-size:13px;"></span>
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" required="">利用規約に同意します。
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary d-block w-100 btnc" id="submitButton" type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">アカウント作成</button>
                    </div>
                    <a class="already" href="login.html">アカウントをお持ちですか？こちらからログイン</a>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
