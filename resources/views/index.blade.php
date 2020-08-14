<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>
    <div id="posts">
    @foreach($posts as $post) 
    <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>

    @endforeach
</div>

</body>