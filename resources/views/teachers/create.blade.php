@extends('layouts.plantilla')

@section('title', 'crearCursos')

@section('content')

<style>

    body{

        background: black;

    }

    h1{

        color: red;

    }

    label{

        color: red;

    }

    .error-message {

        color: red;
        /* Otros estilos personalizados */
    }

</style>

    <h1>Bienvenida, docente. En este formulario te crearás tu usuario.</h1>

    <form action="{{ route('teachers.store') }}" method="POST">

        @csrf

        <label>

            Nombre: 
            <br>

            <input type="text" name="name" value="{{ old('name') }}">

        </label>

        @error('name')
            <div class="error-message">

                <br>
                <span>*{{ $message }}</span>
                <br>

            </div>

        @enderror

        <br>

        <label>

            Rama a la que se dedica: 
            <br>

            <input type="text" name="branch" value="{{ old('branch') }}">

        </label>

        @error('branch')

            <div class="error-message">

                <br>
                <span>*{{ $message }}</span>
                <br>

            </div>

        @enderror

        <br>

        <label>

            Email: 
            <br>

            <input type="email" name="email" value="{{ old('email') }}">

        </label>

        @error('email')

            <div class="error-message">

                <br>
                <span>*{{ $message }}</span>
                <br>

            </div>

        @enderror

        <br>

        <label>

            Contraseña: 
            <br>

            <input type="password" name="password">

        </label>

        @error('password')

            <div class="error-message">
                    
                <br>
                <span>*{{ $message }}</span>
                <br>

            </div>

        @enderror


        <br>
        
        <label>

            Repetir contraseña: 
            <br>

            <input type="password" name="password_confirmation">

        </label>

        <br>

        <button type="submit" style="color:red">Crear docente</button>

    </form>


@endsection