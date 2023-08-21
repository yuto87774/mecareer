<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">

<head>
    @include('html.common.head', ['cssPath' => 'css/contact.css', 'pageTitle' => 'お問い合わせ'])
</head>

<body>
    <header>
        @include('html.common.header')
    </header>
    <section class="getintouch" style="background: var(--bs-body-bg);">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;">お問い合わせ</h4>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modern-form__form-container">
                <form action="{{ route('storeContact') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-r form-group mb-3">
                                <input class="form-control input input-tr" type="text" name="name"
                                    placeholder="氏名">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-l form-group mb-3">
                                <input class="form-control input input-tr" type="email" name="email"
                                    placeholder="メールアドレス">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="modern-form__form-group--padding-t form-group mb-3">
                                <textarea class="form-control input modern-form__form-control--textarea" name="message" placeholder="内容"></textarea>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button class="btn btn-primary submit-now btnc" type="submit">お問い合わせ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
