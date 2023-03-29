<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Your tasks from data base</h1>
    <ul>
        @foreach ($task as $item)
            <li> <a href={{"showDB/".$item->id}}> {{$item->name}}</a> </li>
        @endforeach
    </ul>
</body>
</html>