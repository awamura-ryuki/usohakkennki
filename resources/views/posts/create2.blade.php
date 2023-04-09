<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規コメント作成</title>
    </head>
    <body>
        <h1>新規コメント作成</h1>
        <form action="/comments" method="POST">
            @csrf
            <div>
                <h2>コメント</h2>
                <textarea name="comment[body]" placeholder="良かったところ、改善点など">{{ old('comment.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('comment.body') }}</p>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
