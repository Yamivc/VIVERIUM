<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viverium - Tu espacio de plantas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bladewind-ui@1.1.0/dist/bladewind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bladewind-ui@1.1.0/dist/bladewind.min.js"></script>
    <link rel="stylesheet" href="css/layout.css">

</head>

<body>

    <header class="py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">VIVERIUM</h1>
            <p class="mt-2">Tu espacio personal para mantener todas tus plantas en su mejor cuidado</p>
        </div>
    </header>


    @yield('content')


    <footer class="py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Viverium. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>
