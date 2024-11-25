<?php
    session_start();
    include_once 'db.php'; 

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        
        $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE correo = ? AND password = ?");
        $stmt->bind_param("ss", $correo, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado > 0) {
            $usuario = $resultado->fetch_assoc();
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['apellido'] = $usuario['apellido'];
            header("Location: bienvenido.php");
            exit();
        } else {
            echo "<script>alert('Credenciales incorrectas'); window.location.href='index.php';</script>";
        }

        
        $stmt->close();
        $mysqli->close();
    } else {
        
        header("Location: index.php");
        exit();
    }
?>
