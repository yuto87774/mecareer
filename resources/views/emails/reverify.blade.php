<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>認証キー再送信</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .footer {
            border-top: 1px solid #eee;
            padding-top: 10px;
            margin-top: 20px;
            font-size: 0.8em;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>認証キー再送信のお知らせ</h2>
    </div>

    <p>以下の認証キーを、アカウント登録の確認にご利用ください。</p>

    <h3 style="text-align: center;">{{ $token }}</h3>

    <p>この認証キーは1時間のみ有効です。</p>
    <p>もしアカウントの登録を希望しない場合、このメールを無視してください。</p>

    <div class="footer">
        このメールにお心当たりがない場合、またはお問い合わせがある場合は、サポートまでご連絡ください。
    </div>
</div>

</body>
</html>
