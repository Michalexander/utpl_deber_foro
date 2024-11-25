<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <div class="header__contenedor  ">
            <h1 class="header__titulo">UTPL <span class="header__titulo--modificador">Cayambe</span></h1>
        </div>
    </header>
    <?php
    
    include_once 'db.php';
    
    ?>
    <main class="formulario">
        <form action="iniciarSesion.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese su correo</label>
                <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </main>

</body>

</html>