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
        <li>不正なファイル閲覧、改ざん、削除</li>
    </ul>
    <p>ディレクトリトラバーサル例: ../.env</p>
    <h2>悪い例</h2>
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <p>ファイルパスを入れてね</p>
        <input type="text" name="path">
        <input type="hidden" name="measures" value="unmeasured">
        <input type="submit" value="送信">
    </form>
    <h2>良い例</h2>
    <ul>
        <li>外部からファイルパスを受け取らない</li>
        <li>basename()の使用</li>
    </ul>
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <input type="text" name="path">
        <input type="hidden" name="measures" value="remedied">
        <input type="submit" value="送信">
    </form>
    @isset( $e_msg )
        {{ $e_msg }}
    @endisset
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>