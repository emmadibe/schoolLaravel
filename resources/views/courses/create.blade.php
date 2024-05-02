@extends('layouts.plantilla')

@section('title', 'crearCursos')

@section('content')

    <h1>Acá podrás crear un nuevo curso</h1>

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <label>

            Nombre del curso: 
            <br>

            <input type="text" name="name" value="{{ old('name') }}">

        </label>

        @error('name')
            
            <br>
            <span>*{{ $message }}</span>
            <br>

        @enderror

        <br>

        <label>

            Materia: 
            <br>

            <input type="text" name="subject" value="{{ old('subject') }}">

        </label>

        @error('subject')
            
            <br>
            <span>*{{ $message }}</span>
            <br>

        @enderror

        <br>
        
        <label>

            Escuela: 
            <br>

            <input type="text" name="school" value="{{ old('school') }}">

        </label>

        @error('school')
            
            <br>
            <span>*{{ $message }}</span>
            <br>

        @enderror

        <br>

        <label>

            Cantidad de alumnos: 
            <br>

            <input type="number" name="numberStudents" value="{{ old('numberStudents') }}">

        </label>

        @error('numberStudents')
            
            <br>
            <span>*{{ $message }}</span>
            <br>    

        @enderror

        <br>

        <label>

            Cantidad de notas: 
            <br>

            <input type="number" name="numberGrades" value="{{ old('numberGrades') }}">

        </label>

        @error('numberGrades')
            
            <br>
            <span>*{{ $message }}</span>
            <br>

        @enderror

        <br>

        <button type="submit">Crear curso</button>

    </form>


@endsection