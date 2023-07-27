<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SQLインジェクション 危険度<span style="color: red;">高</span></h1>
    <p>被害想定：情報漏洩、改ざん、妨害</p>
    <h2>未対策</h2>
    <p>itemテーブルからアイテムを検索できます</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" value="Unmeasured" name="measures">
        <input type="submit" value="検索">
    </form>
    @isset ( $measures )
        @if ( $measures === 'Unmeasured' )
            {{ $measures }}
            {{ $text }}
        @endif
    @endisset
    <h2>対策済み</h2>
    <p>itemテーブルからアイテムを検索できます</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" value="Remedied" name="measures">
        <input type="submit" value="検索">
    </form>
    @isset ( $measures )
        @if ( $measures === 'Remedied' )
            {{ $measures }}
            {{ $text }}
        @endif
    @endisset
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>