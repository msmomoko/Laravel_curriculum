<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title> Blog </title> 
    </head>
    <body>
        <h1>Blog 編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <label>Title</label><br>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}" /><br>
                <p class="title_error" style="color:red">
                    @foreach ($errors->get('post.title') as $message)
                        {{ $message }}
                    @endforeach
                </p>
            </div>
            <div class="body">
                <label>Body</label><br>
                <textarea name="post[body]" placeholder="本文">{{ $post->body }}</textarea><br>
                <p class="body_error" style="color:red">
                    @foreach ($errors->get('post.body') as $message)
                        {{ $message }}
                    @endforeach
                </p>
            </div>
            <input type="submit" value="保存" />
　　　　</form>
　　　　<div class="back">[<a href='/posts/{{ $post->id }}'>Back</a>]</div>
    </body>
</html>