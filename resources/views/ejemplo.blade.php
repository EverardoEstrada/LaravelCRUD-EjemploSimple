<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/guardar" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="coloca el nombre de tu mascota"> <br><br>
    <input type="submit" value="Enviar">
</form>

<br>
<br>
<br>
@foreach ($mascotas as $mascota )
    <h2>{{$mascota->nombre}}</h2>
    <a href="/edita/{{$mascota->id}}">Editar</a>
    <a href="/elimina/{{$mascota->id}}">Eliminar</a>
@endforeach

</body>
</html>
