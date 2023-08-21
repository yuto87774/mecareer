<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">

<head>
    @include('html.common.head', ['cssPath' => 'css/user/main.css', 'pageTitle' => 'main'])
</head>

<body>
    <header>
        @include('html.common.header')
    </header>
    <section id="carouselExampleIndicators"  class="carousel slide" data-bs-ride="carousel"
        style="margin-top: 50px;background: #f6f6f6;height: 506px;">
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
            <div class="row carousel-inner" style="height: 500px;">
                <div class="col-sm-4"
                    style="position: relative;background: var(--bs-body-bg);height: 500px;padding: 0;">
                    <img style="width: 100%;height: 70%;background: url('{{ asset('img/ps-img.jpeg') }}') no-repeat;background-size: cover;"
                        width="100" height="80">
                    <ul class="d-flex justify-content-start"
                        style="list-style-type: none;padding-left: 22px;margin-bottom: 5px;margin-top: 3px;">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <div class="d-flex flex-row">
                        <img width="100" height="80"
                            style="width: 32px;height: 32px;margin-left: 20px;background: url('{{ asset('img/ps-img.jpeg') }}');">
                        <h1 class="fs-4" style="width: 80%;margin-left: 10px;">Heading</h1>
                    </div>
                    <p class="textdeadline"
                        style="position: absolute;transform: translateX(340px) translateY(25px) scale(0.80);border-style: none;">
                        締切　2023/06/07</p>
                    <p
                        style="position: absolute;transform: translate(0px) translateX(350px) translateY(-66px) scale(0.80);border-style: none;">
                        X人がエントリー中</p>
                    <p style="margin-left: 16px;border-style: none;">
                        テキスト<br>テキスト
                    </p>
                </div>
                <div class="col-sm-4 m-auto"
                    style="position: relative;background: var(--bs-body-bg);height: 500px;padding: 0;">
                    <img style="width: 100%;height: 70%;background: url(&quot;assets/img/s-point1.jpeg&quot;) no-repeat;background-size: cover;"
                        width="100" height="80">
                    <ul class="d-flex justify-content-start"
                        style="list-style-type: none;padding-left: 22px;margin-bottom: 5px;margin-top: 3px;">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <div class="d-flex flex-row">
                        <img width="100" height="80"
                            style="width: 32px;height: 32px;margin-left: 20px;background: url(&quot;assets/img/company-icon.png&quot;);">
                        <h1 class="fs-4" style="width: 80%;margin-left: 10px;">Heading</h1>
                    </div>
                    <p class="textdeadline"
                        style="position: absolute;transform: translateX(340px) translateY(25px) scale(0.80);border-style: none;">
                        締切　2023/06/07</p>
                    <p
                        style="position: absolute;transform: translate(0px) translateX(350px) translateY(-66px) scale(0.80);border-style: none;">
                        X人がエントリー中</p>
                    <p style="margin-left: 16px;border-style: none;">
                        テキスト<br>テキスト
                    </p>
                </div>
                <div class="col-sm-4"
                    style="position: relative;background: var(--bs-body-bg);height: 500px;padding: 0;/*margin-left: 10px;*//*margin-right: 10px;*/">
                    <img style="width: 100%;height: 70%;background: url(&quot;assets/img/s-point1.jpeg&quot;) no-repeat;background-size: cover;"
                        width="100" height="80">
                    <ul class="d-flex justify-content-start"
                        style="list-style-type: none;padding-left: 22px;margin-bottom: 5px;margin-top: 3px;">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <div class="d-flex flex-row">
                        <img width="100" height="80"
                            style="width: 32px;height: 32px;margin-left: 20px;background: url(&quot;assets/img/company-icon.png&quot;);">
                        <h1 class="fs-4" style="width: 80%;margin-left: 10px;">Heading</h1>
                    </div>
                    <p class="textdeadline"
                        style="position: absolute;transform: translateX(340px) translateY(25px) scale(0.80);border-style: none;">
                        締切　2023/06/07</p>
                    <p
                        style="position: absolute;transform: translate(0px) translateX(350px) translateY(-66px) scale(0.80);border-style: none;">
                        X人がエントリー中</p>
                    <p style="margin-left: 16px;border-style: none;">
                        テキスト<br>テキスト
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 30px;width: 80%;margin-right: auto;margin-left: auto;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="ms-auto" style="">
                            <img class="responsive-image" width="100%" height="300px" style="border-radius: 20px;">
                        </div>
                        <div class="col" style="padding-left: 0px;margin-left: 20px;">
                            <div>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" style="width: 76px;">First</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="width: 76px;">Seco</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="width: 76px;">Third</a>
                                    </li>
                                </ul>
                                <div class="d-flex" style="">
                                    <img width="100" height="80"
                                        style="width: 32px;height: 32px;margin-left: 0px;background: url(&quot;assets/img/company-icon.png&quot;);">
                                    <h1 class="fs-4" style="width: 80%;margin-left: 10px;">Heading</h1>
                                </div>
                            </div>
                            <h4>テキストテキストテキスト</h4>
                            <p style="border-style: none;">
                                テキストああああああああああああああああああ<br>てきすと
                            </p>
                            <div class="d-flex justify-content-around" style="margin-bottom: 10px;">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="d-flex justify-content-around">
                                <p  style="border-style: none;">締切 2023/06/07</p>
                                <p style="border-style: none;">x人がエントリー中</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 d-none d-sm-block">
                    <span
                        style="border-left-style: solid;border-left-color: #557AFE;padding-left: 9px;margin-left: 3px;margin-top: 52px;font-size: 24px;">検索</span>
                    <form>
                        <div class="field">
                            <select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select>
                            <select class="form-select" style="margin-bottom: 18px;">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select>
                            <select class="form-select" style="margin-bottom: 18px;">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function checkWindowSize() {
        if ($(window).width() < 576) {
            // If the window width is less than 576px (Bootstrap's definition of sm), add the carousel-item class
            if(!$('.col-sm-4').hasClass('carousel-item')) {
                $('.col-sm-4').addClass('carousel-item');
                $('.col-sm-4:first').addClass('active');
                $('#carouselExampleIndicators').addClass('carousel slide');
                $('#carouselExampleIndicators').attr('data-bs-ride', 'carousel');
            }
        } else {
            // If the window width is greater than or equal to 576px, remove the carousel-item class
            $('.col-sm-4').removeClass('carousel-item active');
            $('#carouselExampleIndicators').removeClass('carousel slide');
            $('#carouselExampleIndicators').removeAttr('data-bs-ride');
        }
    }

    $(window).on('load resize', checkWindowSize);
</script>
</body>

</html>
