
<!DOCTYPE html>
<html lang="ja">
<head>
    @include('html.common.head', ['cssPath' => 'css/HPstyle.css', 'pageTitle' => 'ホームページ'])
</head>

<body>

<div id="container">

<header>

<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="サンプル派遣会社"></a></h1>

<!--メニュー-->
<div id="menubar">

<nav>
<ul>
<li><a href="{{ route('login') }}">ログイン</a></li>
<li><a href="{{ route('companyRegist') }}">企業のご担当者様</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="{{ route('contact') }}">CONTACT</a></li>
</ul>
</nav>

<div class="sh">
<p>小さな端末でのみ表示させたいものがあれば、ここを使って下さい。</p>
</div>
<!--/.sh-->

</div>
<!--/#menubar-->

</header>

<section id="mainimg">
<div id="text">
<div>
<h2>会社と学生を繋ぐスカウトから関わる就活SNS</h2>
<p class="text pc">豊富な職種からあなたにピッタリの仕事を見つけましょう。<br>
サンプル派遣会社では、スキルアップやキャリアチェンジもお手伝いします。</p>
<p><a href="{{ route('registFirst') }}" class="btn1 large radius"><span class="pc">まずは</span>無料登録<span class="small pc">（登録１分）</span><i class="fas fa-arrow-circle-right"></i></a></p>
<p class="pc"><a href="list.html" class="btn2 radius">仕事検索<i class="fas fa-arrow-circle-right"></i></a></p>
<p class="pc"><a href="{{ route('companyRegist') }}" class="btn2 radius">企業のご担当者様<i class="fas fa-arrow-circle-right"></i></a></p>
</div>
</div>
</section>

<main>

<section class="blur">

<h2>NEWS<span>お知らせ</span></h2>

<dl id="new">
<dt>2023/05/09<span>その他</span></dt>
<dd>tp_haken1配布開始。</dd>
<dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00<span>その他</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
</dl>

</section>

<section class="bg3">

<h2>INTERVIEW<span>キャリアチェンジに成功した人のインタビュー</span></h2>

<div class="list-slide blur">

<div class="list">
<figure><a href="interview.html"><img src="images/sample1.jpg" alt=""></a></figure>
</div>

<div class="list">
<figure><a href="interview.html"><img src="images/sample2.jpg" alt=""></a></figure>
</div>

<div class="list">
<figure><a href="interview.html"><img src="images/sample1.jpg" alt=""></a></figure>
</div>

<div class="list">
<figure><a href="interview.html"><img src="images/sample2.jpg" alt=""></a></figure>
</div>

<div class="list">
<figure><a href="interview.html"><img src="images/sample1.jpg" alt=""></a></figure>
</div>

<div class="list">
<figure><a href="interview.html"><img src="images/sample2.jpg" alt=""></a></figure>
</div>

</div>
<!--/.list-slide-->

</section>

<section class="bg1">

<h2>PICKUP<span>今月の注目企業様</span></h2>

<div class="c2 blur">

<div class="text l">
<h2>SAMPLE COMPANY<span>サンプルカンパニー様</span></h2>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
<p class="c"><a href="#" class="btn1 block">ボタン<i class="fas fa-arrow-circle-right"></i></a></p>
<p class="c"><a href="#" class="btn2 block">ボタン<i class="fas fa-arrow-circle-right"></i></a></p>
</div>
<!--/.text-->

<div class="image r">
<figure><img src="images/sample3.jpg" alt=""></figure>
</div>
<!--/.image-->

</div>

</section>

<section>

<h2>PICKUP<span>今月の注目企業様</span></h2>

<div class="c2 blur">

<div class="text r">
<h2>SAMPLE COMPANY<span>サンプルカンパニー様</span></h2>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
<p class="c"><a href="#" class="btn1 block">ボタン<i class="fas fa-arrow-circle-right"></i></a></p>
<p class="c"><a href="#" class="btn2 block">ボタン<i class="fas fa-arrow-circle-right"></i></a></p>
</div>
<!--/.text-->

<div class="image l">
<figure><img src="images/sample3.jpg" alt=""></figure>
</div>
<!--/.image-->

</div>

</section>

<section class="bg2">

<h2>INTERVIEW<span>キャリアチェンジに成功した人のインタビュー</span></h2>

<div class="list-container">

<div class="list blur">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>ここにタイトルを入れます</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
<p class="c"><a href="" class="btn1 block">もっとみる</a></p>
<span class="new">NEW</span>
</div>

<div class="list blur">
<figure><img src="images/sample2.jpg" alt=""></figure>
<div class="text">
<h4>ここにタイトルを入れます</h4>
</div>
<p class="c"><a href="" class="btn2 block">もっとみる</a></p>
</div>

<div class="list blur">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>ここにタイトルを入れます</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

</section>

</main>

<div id="footermenu">
<ul>
<li class="title">メニュー</li>
<li><a href="index.html">ホーム</a></li>
<li><a href="company.html">会社概要</a></li>
<li><a href="list.html">仕事検索</a></li>
<li><a href="request.html">企業のご担当者様</a></li>
<li><a href="faq.html">よく頂く質問</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
<ul>
<li class="title">メニュー見出し</li>
<li><a href="#">サンプルメニューサンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
</ul>
<ul>
<li class="title">メニュー見出し</li>
<li><a href="#">サンプルメニューサンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
</ul>
<ul>
<li class="title">メニュー見出し</li>
<li><a href="#">サンプルメニューサンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
<li><a href="#">サンプルメニュー</a></li>
</ul>
</div>
<!--/#footermenu-->

<footer>

<small>Copyright&copy; <a href="index.html">サンプル派遣会社</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>

</footer>

</div>
<!--/#container-->

<!--jQueryの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--このテンプレート専用のスクリプト-->
<script src="js/main.js"></script>

<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
<span></span><span></span><span></span>
</div>

<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="js/jquery.inview_set.js"></script>

<!--スライドショー（slick）-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/slick.js"></script>

</body>
</html>
