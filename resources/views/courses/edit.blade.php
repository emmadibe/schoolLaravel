@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')

    <h1><u><p>Acá podrás editar cursos</u></p></h1>

    <form action="{{ route('courses.update', $course ->courseId) }}" method="POST">

        @csrf

        @method('put')

        <label>
            
            Nombre del curso : 
            <br>

            <input type="text" name="name" value="{{ old('name', $course->name) }}">

        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        
        <label>

            Materia 
            <br>

            <input type="text" name="subject" value="{{ old('subject', $course->subject) }}">

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

            <input type="text" name="school" value="{{ old('school', $course->school)}}">

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

            <input type="number" name="numberStudents" value="{{ old('numberStudents', $course->numberStudents) }}">

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

            <input type="number" name="numberGrades" value="{{ old('numberGrades', $course->numberGrades) }}">

        </label>

        @error('numberGrades')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <button class="btn btn-success" type="submit">Actualizar formulario</button>

    </form>

@endsection
