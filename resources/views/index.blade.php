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
        <div class='title row'>
            <h1 class='col-10'>やること</h1>
            <button class='col-2'><a href='/categories/create'>追加</a></button>
        </div>    
        <div class='todos row'>
            @foreach ($todos as $todo)
            <div class="row d-flex">
               <div class='col-2'>{{ $todo->checked }}</div>
               <div class='col-6'>{{ $todo->title }}</div>
               <button class='col-2'><a href='/categories/{{$category->id}}/todos/{{$todo->id}}'>詳細</a></button>
               <form class='col-2' action="/categories/1/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button class='col-12' type="submit">×</button> 
               </form>
            </div>
            @endforeach
        </div>
        <div class="row">
               <button type="button" class="btn btn-dark"><a href='/categories/{{$category->id}}/todos/create'>追加</button>
        </div>
    </body>
</html>