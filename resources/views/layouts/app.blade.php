<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        <title>Ospedale</title>
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center flex-col">
                <h1 class="text-3xl font-black text-center">Opedale</h1>
            </div>
        </header>
                {{-- Mostrar si se ha logueado --}}
                {{-- @auth
                    <nav class="flex gap-2 items-center">
                        <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer" href="{{ route('posts.create') }}">Poner icono de camaraCrear</a>
                        {{-- <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('posts.index', auth()->user()->username) }}">Hola: <span class="font-normal">{{ auth()->user()->username }}</span></a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar Sesión</button>
                        </form>
                    </nav>
                @endauth --}}

                {{-- Mostrar si no se ha logueado --}}
                {{-- @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear Cuenta</a>
                    </nav>
                @endguest --}}

                <main class="container mx-auto mt-10">
                    {{-- Mostrar login --}}
                <div class="wrapper">
                    <div class="bg-animate" id="bg-animate"></div>
                    <div class="curved" id="curved"></div>
                    <div class="form-wrapper sign-in">
                        <form action="#">
                            <p class="text-center text-2xl text-white">Sign In</p>
                            <div class="input-box">
                                <input type="email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-box">
                                <input type="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="forgot-pass">
                                <a href="#" class="mr-7">¿Olvidaste tu contraseña?</a>
                                <a href="#">Crear Cuenta</a>
                            </div>
                            <button type="submit" href="">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                </main>

                <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">Opdale - Todos los derechos reservados <?php echo date('Y') ?></footer>  
            {{-- </div> --}}
        {{-- </header> --}}
        <script src="{{ asset('js/loginscript.js') }}"></script>
    </body>
</html>
