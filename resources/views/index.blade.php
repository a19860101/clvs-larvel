<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/post/create">新增資料</a>
    <div>
        @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <div>
            {{$post->content}}
        </div>
        <form action="/post/{{$post->id}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">
        </form>
        <hr>
        @endforeach
    </div>
</body>
</html>