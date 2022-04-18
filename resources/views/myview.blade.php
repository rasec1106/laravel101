<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $name is a variable sent from routes/web.php-->
    <!-- To make the variable OPTIONAL we use {{$name ?? ''}} -->
    <h1>Hello {{$name ?? ''}}</h1>
    <!-- Here we show the route name -->
    {{route('dashboard.users.show')}}
</body>
</html>