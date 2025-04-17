<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
        }
        .box {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #ccc;
        }
        .box h3 {
            margin-bottom: 15px;
        }
        .box .content {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <a href="/post/create">新增資料</a>
    <div class="container">
        @foreach($posts as $post)
        <div class="box">

            <h3>{{$post->title}}</h3>
            <div class="content">
                {{$post->content}}
            </div>
            <form action="/post/{{$post->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">
            </form>
        </div>

        @endforeach
    </div>
</body>
</html>