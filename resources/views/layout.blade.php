<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viverium - Tu espacio de plantas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"> 
</head>

<body>

    <header>
        <h1>Viverium</h1>
        <p>Tu espacio personal para cultivar y cuidar tus plantas</p>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('my-plants.index') }}">Mis Plantas</a></li>
            <li><a href="{{ route('my-plants.create') }}">Añadir Planta</a></li>
            <li><a href="#">Otra Opción</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Viverium. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
