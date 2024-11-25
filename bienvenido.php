<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="header__contenedor">
            <h1 class="header__titulo">Bienvenido a UTPL Cayambe</h1>
        </div>
    </header>
    
    <main class="contenido">
        <div class="container">
            <h2>¡Inicio de sesión exitoso!</h2>
            <?php if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])): ?>
                <p>Has iniciado sesión correctamente. ¡Bienvenido Estudiante <?php echo htmlspecialchars($_SESSION['nombre']) . ' ' . htmlspecialchars($_SESSION['apellido']); ?>!</p>
            <?php else: ?>
                <p>Has iniciado sesión correctamente. ¡Bienvenido Estudiante!</p>
            <?php endif; ?>
            <a href="cerrar.php"> Cierra Sesion</a>
        </div>
    </main>
</body>

</html>
