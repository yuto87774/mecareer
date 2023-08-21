<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録データ</title>
</head>
<body>
    <h1>プロフィール</h1>
    <p>ログインユーザー名: {{ Auth::user()->name }}</p>
    <p>ログインユーザーメールアドレス: {{ Auth::user()->email }}</p>
    <form action="{{ url('/Apphome') }}" method="POST">
        @csrf
        <button type="submit">Pass Data to Next Page</button>
    </form>
</body>
</html>
