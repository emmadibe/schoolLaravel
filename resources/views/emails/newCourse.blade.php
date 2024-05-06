<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Nuevo curso creado </title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

        
        {{$nameTeacher = session()->get('name')}}

        <h1>Hola, {{ $nameTeacher}}!</h1>

        <br>

        <h2>Creaste un nuevo curso. Sus propiedades son las siguientes: </h2>
        
        <br>

        <strong>Nombre: {{ $data['name'] }}</strong>
        <br>
        <strong>Escuela: {{ $data['school'] }}</strong>
        <br>
        <strong>Materia: {{ $data['subject'] }}</strong>
        <br>
        <strong>Cantidad de alumnos: {{ $data['numberStudents'] }}</strong>
        <br>
        <strong>Cantidad de notas: {{ $data['numberGrades'] }}</strong>
        <br>

        <h2>Recuerda que podés editar los atributos del curso desde la página web. </h2>

</body>

</html>