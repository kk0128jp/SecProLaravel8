<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>クロスサイト・スクリプティング例: {{ $example }}</p>
    <p>テキストを投稿してね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="mode" value="rem">
        <input type="submit" value="投稿">
    </form>
    <p>投稿文</p>
    @isset ( $obj )
        @foreach ($obj as $data)
            {{ $data->comment }}
        @endforeach
    @endisset
    <a href="{{ route('get_xss') }}">XSS TOPページへ</a>
</body>
</html>