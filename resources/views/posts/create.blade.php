<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title> Blog </title> 
    </head>
    <body>
        <h1>Blog </h1>
        <form action="/posts" method="post">
            @csrf
            <div class="title">
                <label>Title</label><br>
                <input type="text" name="post[title]" placeholder="タイトル"><br>
            </div>
            <div class="body">
                <label>Body</label></label><br>
                <textarea name="post[body]" placeholder="本文"></textarea><br>
            </div>
            <input type="submit" value="保存">
　　　　</form>
　　　　<div class="back">
　　　　    [<a href='/posts'>[Back]</a>]
　　　　</div>
    </body>
</html>