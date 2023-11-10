<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<header>
    <nav>
        <div class="logo">Aqui pondremos un logo :v</div>
        <ul>
            <li><a href="index.blade.php">Inicio</a></li>
            <li><a href="catalogo.blade.php">Catalogo</a></li>
            <li><a href="cotizador.blade.php">Cotizador</a></li>
            <li><a href="resumenCotizacion.blade.php">Cotizaciones</a></li>
            <li><a href="seguirCotizando.blade.php">Terminar</a></li>
        </ul>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="Contacto">
        <p>Teléfono: 103-452-4890</p>
        <p>Email: correo@xd.com</p>
    </div>
</footer>
</body>

</html>
