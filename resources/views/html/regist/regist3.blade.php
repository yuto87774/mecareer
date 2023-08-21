<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">
    <head>
        @include('html.common.head', ['cssPath' => 'css/regist/regist3.css', 'pageTitle' => '新規登録ページ'])
    </head>
    <body>
        <section class="register-photo" style="background-color: transparent;">
            <div class="form-container" style="margin-top: 40px;">
                <div class="image-holder" style="background: url('{{ asset('img/ps-img.jpeg') }}') left / cover no-repeat;"></div>
                <form method="post" action="afterRegister.html" style="height: 525px;">
                    <h2 class="text-center">
                        <strong>新規登録</strong>
                    </h2>

                    <div class="form-group mb3" style="padding-bottom: 100px;padding-top: 80px;">
                        <h6 style="padding-left: 5px;">あなたの専門</h6>
                        <select class="form-select form-control" style="height: 40px;">
                            <optgroup label="This is a group">
                                <option value="12" selected="">This is item 1</option>
                                <option value="13">This is item 2</option>
                                <option value="14">This is item 3</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">NEXT &nbsp;3/3</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
