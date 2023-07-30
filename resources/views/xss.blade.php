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
    <p>クロスサイト・スクリプティング例: {{ $example }}</p>
    <h2>悪い例</h2>
    <p>テキストを投稿してね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="measures" value="unmeasured">
        <input type="submit" value="投稿">
    </form>
    <p>投稿文</p>
    @isset ( $result_unm )
        {!! $result_unm !!}
    @endisset
    <h2>良い例</h2>
    <p>テキストを投稿してね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="measures" value="remedied">
        <input type="submit" value="投稿">
    </form>
    <p>投稿文</p>
    @isset ( $result_rem )
        {{ $result_rem }}
    @endisset
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>