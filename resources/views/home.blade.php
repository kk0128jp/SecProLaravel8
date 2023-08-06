<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>webアプリケーションの脆弱性</h1>
        <h2>取り上げる脆弱性</h2>
        <ul>
            <li><a href="{{ route('sqli') }}">SQLインジェクション</a></li>
            <li><a href="{{ route('get_os_com_i') }}">OSコマンドインジェクション</a></li>
            <li><a href="{{ route('get_path_i') }}">ディレクトリトラバーサル</a></li>
            <li><a href="{{ route('get_xss') }}">クロスサイト・スクリプティング</a></li>
            <li><a href="{{ route('get_csrf_login') }}">CSRF(クロスサイト・リクエスト・フォージェリ)</a></li>
        </ul>
        <h2>参考資料</h2>
        <ul>
            <li><a href="https://www.ipa.go.jp/security/vuln/websecurity/ug65p900000196e2-att/000017316.pdf" target="_blank">IPA 安全なウェブサイトの作り方 改訂第7版</a></li>
            <li><a href="https://www.ipa.go.jp/security/vuln/websecurity/ug65p900000196e2-att/000017319.pdf" target="_blank">ウェブ健康診断仕様</a></li>
            <li><a href="https://www.ipa.go.jp/security/vuln/websecurity/ug65p900000196e2-att/000017320.pdf" target="_blank">安全なSQLの呼び出し方</a></li>
        </ul>
    </div>

    <footer>&copy; 2023 kawagisi</footer>
</body>
</html>