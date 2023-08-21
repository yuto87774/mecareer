<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ受付</title>
</head>
<body>
    <p>新しいお問い合わせがありました。</p>
    <p>名前: {{ $contact->name }}</p>
    <p>メール: {{ $contact->email }}</p>
    <p>内容:</p>
    <p>{{ $contact->message }}</p>
</body>
</html>
