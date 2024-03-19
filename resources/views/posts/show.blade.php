<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($post as $post)
        <div>
            <span style="display:flex;"><p style="font-weight: bold; margin-right:10px;">Title:</p><p> {{$post['title']}}</p></span>
            <span style="display:flex;"><p style="font-weight: bold; margin-right:10px;">Post:</p><p> {{$post['body']}}</p></span>
            <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button style="margin-bottom:20px;">Delete</button>
            </form>
        </div>
    @endforeach
    <a href="/" style="text-decoration:none; border:1px solid gray; border-radius:10px; padding:5px;">+ Add Post</a>
</body>
</html>