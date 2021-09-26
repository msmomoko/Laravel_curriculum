<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title> Blog </title> 
    </head>
    <body>
        <h1>Blog</h1>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
        </div>
        <div class='link'>
            <a href='/posts'>[Back]</a>
        </div>
    </body>
</html>