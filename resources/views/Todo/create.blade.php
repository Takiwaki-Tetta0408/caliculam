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
        <form action="/categories/{{ $category->id }}/todos" method="POST">
            {{ csrf_field() }}
            タイトル：<br>
            <input type="text" name="todo[title]" placeholder="タイトル"/><br>
            期限：<br>
            <input type="date" name="todo[deadline]" placeholder="日付"/><br>
            URL:<br>
            <input type="text" name="todo[url]" placeholder="URL"/><br>
            メモ：<br>
            <textarea name="todo[memo]" ></textarea><br>
            <button class='col-2' type="submit">登録</button>
        </form>
        <div class="back">[<a href="/categories/1">戻る</a>]</div>
    </body>
</html>
