<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
        {{csrf_field()}}
        {{method_field('delete')}}
        <input type="submit" style="display:none">
        <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p> 
        </form>
        <div class='post'>
            <h2 class='title'>{{ $post->title}}</h2>
            <p class='body'>{{$post->body}}</p>
            <p class='updated_at'>{{ $post->updated_at}}</p>
            </div>
            <div class='back'>[<a href='/'>back</a>]</div>
            <script>
                function deletePost(e) {
                    'use strict';
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                        document.getElementById('form_delete').submit();
                    }
                }
            </script>
    </body>
</html>
<!--htmlのIDとgetelemntByidのかっこの中身が対応しているJavascript  idが対応している　JavascriptのgetElementByid調べる-->