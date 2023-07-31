<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CSRF(クロスサイト・リクエスト・フォージェリ) 危険度:<span style="color: yellow;">中</span></h1>
    <p>被害想定</p>
    <ul>
        <li></li>
    </ul>
    <h2>悪い例</h2>
    <p>ログインしてね</p>
    <form action="{{ route('post_csrf_login') }}" method="post">
        <p>ユーザー名</p>
        <input type="text" name="name">
        <p>パスワード</p>
        <input type="hidden" name="measures" value="unmeasured">
        <input type="text" name="password">
        <input type="submit" value="ログイン">
    </from>
    <h2>良い例</h2>
    <p>ログインしてください</p>
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>