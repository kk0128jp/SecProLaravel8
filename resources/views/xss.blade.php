<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>クロスサイト・スクリプティング(XSS) 危険度:<span style="color: yellow;">中</span></h1>
    <p>被害想定</p>
    <ul>
        <li></li>
    </ul>
    <p>クロスサイト・スクリプティング例: </p>
    <h2>悪い例</h2>
    <p>スクリプトを実行してみてね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="script">
        <input type="submit" value="実行">
    </form>
    <h2>良い例</h2>
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>