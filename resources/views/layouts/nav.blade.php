{{-- componente de la barra de navegacion, extendible a las vistas  --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="fixed top-0 left-0 bg-white w-full shadow z-50">
            <div class="container m-auto flex justify-between items-center text-gray-700">
                <h1 class="pl-8 py-4 text-xl font-bold">Gestión de reclamos</h1>

                {{-- condicional de laravel que nos permite saber si el usuario esta autenticado o no, y en función a eso mostrar ciertos elementos de la navbar --}}

            @auth
                <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('reclamo')}}">Generar Reclamo</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('privada')}}">Novedades</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Normas de Convivencia</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('logout')}}">Cerrar Sesión</a></li>
            @else
                <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('login')}}">Iniciar Sesión</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('registro')}}">Registrarse</a></li>
                </ul>
            @endauth

                
                <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
                    <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                    <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                    <div class="w-5 h-1 bg-gray-600"></div>
                    <div class="absolute top-8 -right-full h-screen w-8/12 bg-white border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
           
                <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Generar Reclamo</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('welcome')}}">Novedades</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('welcome')}}">Normas de Convivencia</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                </ul>    
           
                <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('login')}}">Iniciar Sesión</a></li>
                    <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="{{route('registro')}}">Registrarse</a></li>
                </ul>
            
                    </div>
                </button>
            </div>
        </nav>
    </body>
</html>