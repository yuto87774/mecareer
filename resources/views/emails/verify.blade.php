<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メールアドレス認証</title>
</head>
<body>

    <p>この度はご登録ありがとうございます!</p>

    <p>登録を完了するためには、以下の認証コードをウェブサイトに入力してください。</p>

    <p>認証コード: <strong>{{ $token }}</strong></p>

    <p>この認証コードは1時間後に無効となります。</p>

    <p>ウェブサイトにアクセスし、この認証コードを入力して登録を完了してください。</p>

    <p>このメールに心当たりがない場合は、お手数ですが無視してください。</p>

    <p>よろしくお願い申し上げます。<br>プラットフォームチーム</p>
</body>
</html>
