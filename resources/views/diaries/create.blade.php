<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>カリキュラムの日記</h1>
        <form action="/diaries/store" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="diary[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="diary[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/diaries">戻る</a>
        </div>
    </body>
</html>
