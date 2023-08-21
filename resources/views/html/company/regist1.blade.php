<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">

<head>
    @include('html.common.head', ['cssPath' => 'css/loginFirst.css', 'pageTitle' => 'ログイン'])
</head>

<body>
    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container" style="margin-top: 40px;">
            <div class="image-holder"
                style="background: url('{{ asset('img/ps-img.jpeg') }}') left / cover no-repeat;"></div>
            <form method="post" action="{{ route('companyAuthenticationKey') }}" style="height: 525px;">
                {{ csrf_field() }}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <h2 class="text-center">
                    <strong>新規登録</strong>
                </h2>
                <div class="form-group mb-3">
                    <input class="form-control" type="text" name="name" placeholder="会社名" required="">
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" type="text" name="person_in_charge" placeholder="担当者名" required="">
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" type="email" name="email" placeholder="担当者メールアドレス" required="">
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" type="tel" name="phone_number" placeholder="担当者電話番号" required="">
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
                    <input class="form-control" type="password" id="password" name="password" placeholder="パスワード"
                        onchange="changePassword()" required="">
                </div>
                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;">
                    <span id="errorMessage" class="text-danger" style="font-size:13px;"></span>
                </div>
                <div class="form-group mb-3">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" required=""><a href="{{ route('terms') }}">利用規約に同意します。</a>
                        </label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary d-block w-100 mt-2" id="submitButton" type="submit"
                        style="background: linear-gradient(172deg, rgba(22, 195, 206, 0.88) 0%, rgba(22, 195, 206, 0.88) 20.93%, #94DEB1 90.72%);">申し込む</button>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
