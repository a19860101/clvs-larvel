<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">內文</label>
            <textarea id="" cols="30" rows="10" name="content"></textarea>
        </div>
        <input type="submit">
    </form>
</body>
</html>