  
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap, extensión de paletas de colores. Es para tener, entre otros, el color morado -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>

      .imagen_barra{

          border-radius: 50%;
          width: 100px;
          height: 100px;
          object-fit: cover;
          margin: 1em 0;

      }

      .nav-link.active {

        color: green;
        /* Otros estilos que desees aplicar */
      }
    </style>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">

    <a class="navbar-brand" href="#">

      <!-- Use the HTML <img> tag to display the image -->
	    <img src="acc/acc_mostrar_imagen.php" alt="Displayed image">

    </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('courses.index')); ?>">
              <i class=""></i> Ver mis cursos
              <span class="sr-only">(current)</span>

            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(route('courses.create')); ?>"><i class="bi bi-0-circle"> Crear curso </i><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">

            <button type="button" class="btn btn-transparent" data-toggle="modal" data-target="#modal_cargar_foto">
                <i class="bi bi-cloud-arrow-up"></i>Cargar foto de perfil
            </button>

              <!-- Al escribir la clase btn btn-transparent, el botón adopatará el color de fondo. -->
          </li>

          <li class="nav-item">
            <a class="nav-link" href=""><i class="bi bi-person-fill-slash">Cerrar sesión</i></a>
          </li>

          <?php //if(($mostrar["rol_id"]) == 1){ //La idea es que solo los administradores (rol_id == 1) puedan ver a todos los docentes que hay para poder hacerles modificaciones.  ?>

            <li class="nav-item">
              <a class="nav-link" href="frm_ver_todos_docentes.php"><i class="bi bi-zoom-in">Ver docentes</i></a>
            </li>
          <?php// } ?>

        </ul>

      </div>
    </nav>
  
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/barra.blade.php ENDPATH**/ ?>