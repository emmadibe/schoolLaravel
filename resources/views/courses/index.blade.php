@extends('layouts.plantilla')

@section('title', 'courses')

@section('content')

    <h1 align="center">Bienvenido a la página principal de cursos</h1>

    <a href="{{route('courses.create')}}">Crear curso</a>
    <br><br>

    <table class="table table-borderless">

        <thead>

          <tr>

            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Cursp</th>
            <th scope="col">Escuela</th>
            <th scope="col">Materia</th>
            <th scope="col">Cantidad de alumnos</th>
            <th scope="col">Cantidad de notas</th>
            <th scope="col" style="color:green">Entrar</th>
            <th scope="col" style="color:yellowgreen">Editar</th>
            <th scope="col" style="color:red">Eliminar</th>

          </tr>

        </thead>

        <tbody>

            @foreach($courses as $course)

                <tr>

                    <th scope="row">1</th>
                    <td>{{ $course->courseId }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->school }}</td>
                    <td>{{ $course->subject }}</td>
                    <td>{{ $course->numberStudents }}</td>
                    <td>{{ $course->numberGrades }}</td>
                    <td><a class="btn btn-success" href="{{ route('courses.show', $course->courseId) }}">IN</a></td>
                    <td><a class="btn btn-success" href="{{ route('courses.edit', $course->courseId) }}"><i class="bi bi-wrench-adjustable"></i></a></td>
                    <td><a class="btn btn-success" href="{{ route('courses.destroy', $course->courseId) }}"><i class="bi bi-x-octagon-fill"></i></a></td>
        
                </tr>
                
            @endforeach

        </tbody>

      </table>

    {{$courses->links()}}

    @if(session('info'))

        <script>

            alert("{{ session('info') }}")

        </script>

    @endif

@endsection