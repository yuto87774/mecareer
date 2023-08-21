<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/regist/regist2.css', 'pageTitle' => '新規登録ページ'])
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
                        <input class="form-control" type="text" name="name" placeholder="氏名" style="border-width: 3px;border-radius: 0px;" required="">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="name_kana" placeholder="氏名カナ" required="">
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
                        <input class="form-control" type="tel"  name="phone_number" placeholder="電話番号">
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary btn-lg d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">next &nbsp;2/3</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
