<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SQLインジェクション 危険度:<span style="color: red;">高</span></h1>
    <p>被害想定</p>
    <ul>
        <li>情報漏洩、改ざん、妨害</li>
    </ul>
    <p>ユーザー名: badtaro　パスワード: taro</p>
    <p>ユーザー名: goodhanako　パスワード: hanako</p>
    <p>SQLインジェクション例: ' or 1 = 1 or ';</p>
    <h2>悪い例</h2>
    <p>ログインしてください</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <p>ユーザー名</p>
        <input type="text" name="name">
        <p>パスワード</p>
        <input type="password" name="passwd">
        <input type="hidden" value="unmeasured" name="measures">
        <input type="submit" value="ログイン">
    </form>
    @isset ( $measures )
        @if ( $measures === 'unmeasured' )
            {{ $result }}
        @endif
    @endisset
    <h2>良い例</h2>
    <p>ログインしてください</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <p>ユーザー名</p>
        <input type="text" name="name">
        <p>パスワード</p>
        <input type="password" name="passwd">
        <input type="hidden" value="remedied" name="measures">
        <input type="submit" value="ログイン">
    </form>
    @isset ( $measures )
        @if ( $measures === 'remedied' )
            {{ $result }}
        @endif
    @endisset
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>