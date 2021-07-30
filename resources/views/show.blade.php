<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
         タイトル：<br>
        <input type="text" name="todo[title]" value="{{ $todo->title }}" readonly><br>
         期限：<br>
        <input type="text" name="todo[title]" value="{{ $todo->deadline }}" readonly><br>
         URL:<br>
        <input type="text" name="todo[title]" value="{{ $todo->url }}" readonly><br>
         メモ：<br>
        <input name="message" value="{{ $todo->memo }}" readonly></textarea><br>
        <div class="back">[<a href="/categories/1">戻る</a>]</div>
    </body>
</html>
