<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>アカウント情報</h1>
    <p>ユーザー名</p>
    {{ $name }}
    <p>メールアドレス</p>
    {{ $email }}
    <button><a href="{{ route('get_csrf_edit') }}">編集</a></button>
    <button><a href="{{ route('get_csrf_fake') }}">罠サイト</a></button>
</body>
</html>