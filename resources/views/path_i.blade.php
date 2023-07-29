<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ディレクトリトラバーサル 危険度:<span style="color: red;">高</span></h1>
    <p>被害想定</p>
    <ul>
        <li></li>
    </ul>
    <p>ディレクトリトラバーサル例: </p>
    <h2>悪い例</h2>
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <p>ファイルパスを入れてね</p>
        <input type="text" name="file_path">
        <input type="submit" value="送信">
    </form>
    <h2>良い例</h2>
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>