<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>Hello <?php echo $name ?></h1>
    <h1>your age <?php echo $age ?></h1>
    <form action="/about" method="POST">
        @csrf
        <input type="text" name="n" placeholder="name">
        <input type="text" name="a" placeholder="age">
        <input type="submit" value="Send">
    </form>
</body>
</html>