<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Nuevo Usuario </title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

        <h1>Bienvenido, {{ $data['name'] }}!</h1>

        <br>

        <h2>Has creado un nuevo usuario. Tus datos son los siguientes: </h2>
        
        <br>

        <strong>Nombre: {{ $data['name'] }}</strong>
        <br>
        <strong>Email: {{ $data['email'] }}</strong>
        <br>
        <strong>Rama: {{ $data['branch'] }}</strong>
        <br>

        <h2>En esta página web vas a poder crear tus cursos, agregarles alumnos y notas. </h2>

</body>

</html>