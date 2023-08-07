<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/template.css')  }}" >
    @yield('head-link')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container text-center">
        <header>
            <h1 class="fw-bold title">@yield('title') 危険度:@yield('level')</h1>
        </header>
    
        <h2 class="fw-bold">被害想定</h2>
        <ul>
            @yield('damage-list')
        </ul>
        
        <h2 class="fw-bold">脆弱例</h2>
        <p class="example">@yield('title')例: <sapn style="color: #E7B10A;">@yield('example')</span></p>
        @yield('bad-cont')
        
        <h2 class="fw-bold">対策例</h2>
        @yield('good-cont')

        @yield('link')
    

        <footer>
            <p>&copy; 2023 kawagisi</p>
        </footer>
    </div>
</body>
</html>