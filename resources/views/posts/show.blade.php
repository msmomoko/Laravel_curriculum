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
        <div class='back_link'>[<a href='/posts'>Back</a>]</div>
        <div class='edit_link'>[<a href='/posts/{{ $post->id }}/edit'>編集</a>]</div>
    </body>
</html>