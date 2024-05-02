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

        <h1>Bienvenido, <?php echo e($data['name']); ?>!</h1>

        <br>

        <h2>Has creado un nuevo usuario. Tus datos son los siguientes: </h2>
        
        <br>

        <strong>Nombre: <?php echo e($data['name']); ?></strong>
        <br>
        <strong>Email: <?php echo e($data['email']); ?></strong>
        <br>
        <strong>Rama: <?php echo e($data['branch']); ?></strong>
        <br>

        <h2>En esta página web vas a poder crear tus cursos, agregarles alumnos y notas. </h2>

</body>

</html><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/emails/newUser.blade.php ENDPATH**/ ?>