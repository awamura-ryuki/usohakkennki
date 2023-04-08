<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>カリキュラムの日記</h1>
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary'>
                    <h2 class='title'>{{ $diary->title }}</h2>
                    <p class='body'>{{ $diary->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $diaries->links() }}
        </div>
    </body>
</html>
