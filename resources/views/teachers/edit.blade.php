@extends('layouts.plantilla')

@section('title', 'Teacher edit')

@section('content')

    <h1><u><p>Hola, {{ $teacher->name }}. Acá podrás editar tu perfil</u></p></h1>

    <form action="{{ route('teachers.update', $teacher ->teacherId) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('put')

        <label>
            
            Nombre: 
            <br>

            <input type="text" name="name" value="{{ old('name', $teacher->name) }}">

        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        
        <label>

            Contraseña:
            <br>

            <input type="password" name="password" value="########">

        </label>

        @error('password')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        
        <label>

            Repetir contraseña: 
            <br>

            <input type="password" name="password_confirmation">

        </label>

        <br>

        <label>

            Rama 
            <br>

            <input type="text" name="branch" value="{{ old('branch', $teacher->branch) }}">

        </label>

        @error('branch')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>

            Foto de perfil
            <br>

            <input type="file" name="photo">

        </label>

        <br>

        <button type="submit">Actualizar usuario</button>

    </form>

@endsection
