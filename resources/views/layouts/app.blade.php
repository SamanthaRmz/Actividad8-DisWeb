<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Aplicación</title>
        <!-- Estilos -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="container mt-4">
            @yield('content')
        </div>

        <!-- Pie de página -->
        <footer class="footer bg-light text-center py-3 mt-4">
            <div class="container">
                <span class="text-muted">© 2024 Actividad 8 de Samantha Ramirez. Todos los derechos reservados.</span>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
