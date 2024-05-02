<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Email </title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

        <h1>Correo electrónico</h1>
  
        <strong>Nombre: </strong>{{ $data['name'] }}
        <br>
        <strong>Email: </strong>{{ $data['mail'] }}
        <br>
        <strong>Mensaje: </strong>{{ $data['message'] }}

</body>

</html>