<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('title') 危険度:@yield('level')</h1>
    </header>
    
    <div class="container">
        <p>被害想定</p>
        <ul>
            @yield('damage-list')
        </ul>
        <p>@yield('title')例: @yield('example')</p>
        
        <h2>脆弱例</h2>
        @yield('bad-cont')
        
        <h2>対策例</h2>
        @yield('good-cont')

        @yield('link')
    </div>

    <footer>
        <p>&copy; 2023 kawagisi</p>
    </footer>
</body>
</html>