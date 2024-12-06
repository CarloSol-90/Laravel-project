<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Carlos Soler Web')</title> {{-- Yield se utiliza cuando el contenido variable es unico, no vamos a pasarle mas de una vez --}}

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- fonteawesome --}}
    {{-- tipografia --}}

    @stack('css') {{--Utilizaremos stack cuando vamos a utilizar esta referencia mas de una vez --}}
</head>

<body>
    <header></header>

        @yield('content') {{-- Con yield estamos diciendo que esta parte va a ser reemplazada por un contenido varible --}}

    <footer></footer>

        @stack('js') {{--Puede colocar un stack al final del body para incluir posible codigo JS --}}
</body>

</html>