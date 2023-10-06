<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/home.css')  }}" >
    <title>SecProLaravel9</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="fw-bold mt-0">安全なウェブサイトの作り方 ~ Laravel9 ~</h1>
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
        <footer>&copy; 2023 kk0128jp</footer>
    </div>
</body>
</html>