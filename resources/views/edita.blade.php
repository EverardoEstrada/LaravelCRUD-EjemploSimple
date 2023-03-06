<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/guardar" method="post">
        <input type="hidden" name="id" value="{{$mascota->id}}">
        <input type="text" name="nombre" value="{{$mascota->nombre}}">
        @csrf
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
