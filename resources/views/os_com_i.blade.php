<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OSコマンドインジェクション 危険度:<span style="color: red;">高</span></h1>
    <p>被害想定</p>
    <ul>
        <li>サーバ内ファイルの閲覧、改ざん、削除</li>
        <li>不正なシステム操作</li>
        <li>不正なプログラムのダウンロード、実行</li>
        <li>他のシステムへの攻撃の踏み台</li>
    </ul>
    <p>OSインジェクション例: </p>
    <h2>悪い例</h2>
    <form action="{{ route('post_os_com_i') }}" method="post">
        @csrf
        <p>OSコマンドを入力してね</p>
        <input type="text" name="command">
        <input type="submit" value="実行">
    </form>
    @isset( $command )
        <p>コマンド</p>
        <p>{{ $command }}</p>
        <p>結果</p>
        <pre>{{ $result }}</pre>
    @endisset
    <h2>良い例</h2>
    <p>シェルを起動できる言語機能の利用を避ける。</p>
    <p>外部から引数を受け取らない</p>
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>