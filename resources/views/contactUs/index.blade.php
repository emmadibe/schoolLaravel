@extends('layouts.plantilla')

@section('title', 'contactUs')

@section('content')

    <h1 align="center">Dejanos un mensaje</h1>

    <div class="row">

        <div class ="col-4">

            &nbsp;

        </div>

        <div class="col-4">

            <form action="{{ route('contactUs.store') }}" method="POST">
                {{-- Nunca debo olvidarme del token de seguridad @csrf que Laravel te demanda para el envío de cualquier formulario. --}}
                @csrf

                <div class="form-group">

                    <label for="name">

                        Nombre: 

                        <br>

                        <input type="text" name="name" required placeholder="Pedro" value= {{ old('name') }}>

                    </label>    

                    <br>

                    @error('name')

                        <p><strong>{{ $message }}</strong></p>

                    @enderror

                </div>

                <div class="form-group">

                    <label for="mail">

                        Email: 

                        <br>

                        <input type="email" required name="mail" placeholder="ejemplo@gmail.com" value= {{ old('mail') }}>

                    </label>

                    <br>

                    @error('mail')
                        
                        <p><strong>{{ $message }}</strong></p>

                    @enderror

                </div>

                <div class="form-group">

                    <label for="message">

                        Mensaje: 

                        <br>

                        <textarea required name="message" >

                            {{ old('message') }}

                        </textarea>

                    </label>

                    <br>

                    @error('message')

                        <p><strong>{{ $message }}</strong></p>

                    @enderror

                </div>

                <button type="submit" class="btn btn-success" name="button">Enviar mensaje</button>

            </form>

        </div>

        <div class="col-4">

            &nbsp;

        </div>

        @if(session('info'))

            <script>

                alert("{{ session('info') }}")

            </script>

        @endif

    </div>

@endsection