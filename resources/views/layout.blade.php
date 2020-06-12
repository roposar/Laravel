<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">Acerca de</a></li>
            <li><a href="/portfolio">Portafolio</a></li>
            <li><a href="/contact">Contacto</a></li>
        </ul>
    </nav>

    @yield('content')

</body>
</html>
