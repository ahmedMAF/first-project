<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 100%
        }
        td{
            display: inline-block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="date" placeholder="date" name="create">
        <input type="date" placeholder="date" name="update">
        <input type="submit" value="insert" formaction="/insert">
        <br>
        <input type="number" placeholder="id" name="id">
        <input type="submit" value="delete" formaction="/delete">
        <br>
        <input type="text" placeholder="name" name="nameUpdate">
        <input type="number" placeholder="id" name="idUpdate">
        <input type="submit" value="delete" formaction="/update">
    </form>
    <table>
        @foreach ($task as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>