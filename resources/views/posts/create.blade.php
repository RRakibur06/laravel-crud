<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="POST">
        @csrf
        <input name="title" type="text" placeholder="Input post title">
        <textarea name="body" id="" cols="30" rows="10" placeholder="Input post here"></textarea>
        <input type="submit">
    </form>
</body>
</html>