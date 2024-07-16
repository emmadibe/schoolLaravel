
<?php

  use App\Models\Teacher;

  $rol = session()->get('rol');

  if($rol == 1){

    $rol = "Administrador";

  }else{

    $rol = "Usuario";

  }

  $teacher = Teacher::find(session()->get('teacherId'));
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap, extensión de paletas de colores. Es para tener, entre otros, el color morado -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>

        
        .imagen_barra{  /* SELECTOR DE CLASE (.)*/

        border-radius: 50%;
          width: 100px;
          height: 100px;
          object-fit: cover;
          margin: 1em 0;

        }

        .active{ /* SELECTOR DE CLASE (.)*/

          color:greenyellow;

        }

        a{  /* SELECTOR DE TIPO (tag a)*/

          text-decoration: none; /* AHORA LOS LONKS NO SE VERÁN COMO LINKS*/ 

          color: #333; /* SE MOSTRARÁN EN GRIS LOS LINKS */

        }

        .nav-item a{ /* SELECTOR DE CLASE (.) */ 

          word-spacing: 5px; /* Separación, medido en px, entre cada palabra.*/

          margin-right: 80px; /* SEPARACIÓN, medido en px, entre cada elemento de la barra.*/
        
        }

    </style>

  </head>

  <body>

    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">


      <!-- Use the HTML <img> tag to display the image -->
      @if($teacher)
            <img src={{ asset('/img/photo/'.$teacher->namePhoto) }} alt="foto de perfil" style="border-radius: 50%;" width="2%" >
      @endif
	      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

                <strong><i class="bi bi-zoom-in">{{ session()->get('name') }} ({{ $rol }})</i></strong>&nbsp; &nbsp;

                <li class="nav-item active">
                    <a class="{{ request()->routeIs('courses.index') ? 'active' : ''}}" href="{{ route('courses.index') }}"><i class="bi bi-0-circle"> Ver cursos</i><span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="{{ request()->routeIs('contactUs.index') ? 'active' : ''}}" href="{{ route('contactUs.index') }}"><i class="bi bi-0-circle"> Contactanos</i><span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="{{ request()->routeIs('courses.create') ? 'active' : '' }}" href="{{ route('courses.create') }}"><i class="bi bi-0-circle">Crear un nuevo curso</i><span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">

                    <a class="{{ request()->routeIs('teachers.edit') ? 'active' : '' }}" href="{{ route('teachers.edit') }}"><i class="bi bi-0-circle"> Editar perfil</i><span class="sr-only">(current)</span></a>

                </li>

                @if($rol == "Administrador") 
                {{-- La idea es que solo los administradores puedan ver la lista de docentes. --}}
                <li class="nav-item">
                <a class="{{ request()->routeIs('teachers.index') ? 'active' : '' }}" href="{{ route('teachers.index') }}"><i class="bi bi-zoom-in">Ver docentes</i></a>
                </li>

                @endif

                <li class="nav-item">
                    
                      <form action="{{ route('teachers.logout') }}" method="POST">

                            @method('put')
                            @csrf

                            <button><i class="bi bi-zoom-in">Cerrar sesión</i></button>

                      </form>

                </li>

        </ul>

      </div>
    </nav>

    </header>
</html>