<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('head-link')
    <title>CSRF(クロスサイト・リクエスト・フォージェリ)</title>
</head>
<body> 
    <div class="container text-center">
        <h1 class="title">CSRF(クロスサイト・リクエスト・フォージェリ)</h1>
        @yield('cont')
        <footer>&copy; 2023 kawagisi</footer>
    </div>
</body>
</html>