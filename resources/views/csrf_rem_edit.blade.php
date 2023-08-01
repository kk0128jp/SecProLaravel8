<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>アカウント情報　編集</h1>
    <form action="{{ route('post_csrf_rem_edit') }}" method="post">
        @csrf
        <input type="text" name="new_name" value="{{ $name }}">
        <input type="text" name="new_email" value="{{ $email }}">
        <input type="submit" value="編集">
    </form>
</body>
</html>