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
        <li>ウェブページの改ざん</li>
        <li>Cookieの漏洩</li>
    </ul>
    <h2>悪い例</h2>
    <a href="{{ route('get_unm_xss') }}">脆弱</a>
    
    <h2>良い例</h2>
    <a href="{{ route('get_rem_xss') }}">良い例</a>
    
    <p><a href="{{ route('home') }}">ホームへ</a></p>
</body>
</html>