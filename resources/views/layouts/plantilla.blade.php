<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>

</head>

<body>
    {{-- Escribo SIEMPRE el div que dice conteiner. Esto es para trabajar con Bootstrap. --}}
    <div class="conteiner text-center"> 

        {{-- HEADER --}}
        @include('layouts.partials.header')


        {{-- BODY --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- FOOTER --}}
        @include('layouts.partials.footer')

    </div>

</body>

</html>