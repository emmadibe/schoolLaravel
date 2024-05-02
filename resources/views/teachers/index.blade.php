@extends('layouts.plantilla')

@section('title', 'docentes')

<style>

    #myTable {

        width: 100%;
        
    }

</style>

@section('content')

    <table class="table table-striped table-dark table-responsive" id="myTable">

        <thead>

            <h1 align="center">Administrador {{ session()->get('name') }}: acá podrás ver el listado de docentes.</h1>

            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rama</th>
                <th scope="col">Rol</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col"><i class="bi bi-brush" style="color:yellow">EDITAR</i></th>
                <th scope="col"><i class="bi bi-x-octagon-fill" style="color:red">ELIMINAR</i></th>
            </tr>

        </thead>

        <tbody>

            @foreach($teachers as $teacher)
                
                <tr>

                    <th scope="row">1</th>
                    <td> {{ $teacher->teacherId }} </td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->branch }}</td>
                    <td>{{ $teacher->rol }}</td>
                    <td>{{ $teacher->created_at }}</td>
                    <td>edit</td>
                    <td> <a href="{{ route('teachers.destroy', $teacher->teacherId) }}" style="color:red"> Eliminar </a> </td>
        
                </tr>

            @endforeach

        </tbody>
        
      </table>

    {{ $teachers->links() }}

@endsection
