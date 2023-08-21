<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.header', ['cssPath' => 'css/loginSecond.css', 'pageTitle' => 'loginSecond'])
    </head>
    <body>
        <section class="register-photo" style="background-color: transparent;">
            <div class="form-container" style="margin-top: 40px;">
                <div class="image-holder" style="background: url(&quot;assets/img/IINET-DOSAGE-1.jpg&quot;) left / cover no-repeat;"></div>
                <form method="post" action="afterRegister.html" style="height: 525px;">
                    <h2 class="text-center">
                        <strong>ログイン</strong>
                    </h2>
                    <div class="form-group mb-3">
                        <input class="form-control" type="email" name="email" placeholder="氏名" style="border-width: 3px;border-radius: 0px;" required="">
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
                        <input class="form-control" type="password" id="password" name="password" placeholder="氏名カナ" onchange="changePassword()" required="">
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-sm-12 nosize">
                                <select class="form-select display-inline-block" id="yearSelect" readonly=""></select>
                                <script>
                                    const yearSelect = document.getElementById('yearSelect');

                                    for (let i = 1970; i <= 2020; i++) {
                                        const option = document.createElement('option');
                                        option.value = i;
                                        option.text = i;
                                        if (i === 2000) option.selected = true;
                                        yearSelect.appendChild(option);
                                    }
                                    </script>
                                <select class="form-select display-inline-block" id="monthSelect" required=""></select>
                                <script>
                                    const monthSelect = document.getElementById('monthSelect');
                                    //ちょっと回りくどい書き方してる。
                                    const months = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];

                                    for (let i = 0; i < months.length; i++) {
                                        const option = document.createElement('option');
                                        option.value = i + 1;
                                        option.text = months[i];
                                        if (i === 0) option.selected = true;
                                        monthSelect.appendChild(option);
                                    }
                                    </script>
                                <select class="form-select display-inline-block" id="dateSelect" required=""></select>
                                <script>
                                    const dateSelect = document.getElementById('dateSelect');

                                    for (let i = 1; i <= 31; i++) {
                                        const option = document.createElement('option');
                                        option.value = i;
                                        option.text = i;
                                        if (i === 1) option.selected = true;
                                        dateSelect.appendChild(option);
                                    }
                                    </script>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" id="confirmPassword" name="password-repeat" placeholder="電話番号" onchange="changePassword()">
                    </div>
                    <div id="passwordsError" style="display: none;margin-bottom: 16.5px;">
                        <span id="errorMessage" class="text-danger" style="font-size:13px;"></span>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary btn-lg d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">next &nbsp;1/2</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
</html>
