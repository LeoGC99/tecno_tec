<?php
include("conexion.php");
session_start();

if (isset($_POST['Ingresar'])) { // Verifica si el botón de envío ha sido presionado
    $usuario = mysqli_real_escape_string($conn, $_POST['Correo']);
    $contraseña = mysqli_real_escape_string($conn, $_POST['Contraseña']);

    // Consulta para verificar el usuario y la contraseña
    $sql = "SELECT id, Contraseña FROM bbaselogin WHERE Correo = '$usuario'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $hash = $row['Contraseña'];

        // Verifica la contraseña
        if (password_verify($contraseña, $hash)) {
            $_SESSION['id_u'] = $row['id'];
            header("Location: admin.php"); // Redirige a admin.php
            exit(); // Detiene la ejecución del script después de redirigir
        } else {
            echo "<script>
                    alert('Contraseña incorrecta');
                    window.location='index.php'; // Redirige de vuelta al formulario de inicio de sesión
                  </script>";
        }
    } else {
        echo "<script>
                alert('El usuario no existe');
                window.location='index.php'; // Redirige de vuelta al formulario de inicio de sesión
              </script>";
    }
}

$conn->close(); // Cierra la conexión a la base de datos
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y logueo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../estilologin.css">
</head>
<body>
    <!-- Esta sección es para el Inicio de sesión -->
    <div class="container" id="form2">
        <h1 class="titulo_registro">Iniciar sesión.</h1>
        <form method="post" action="pagprinc.php"> <!-- Cambiado a 'inicio_sesion.php' -->
            <div class="input_grupo">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Correo" id="Correo" placeholder="Ingrese su correo" required>
                <label for="Correo">Correo</label>
            </div>
            <div class="input_grupo">
                <i class="fas fa-lock"></i>
                <input type="password" name="Contraseña" id="Contraseña" placeholder="Ingrese la contraseña" required>
                <label for="Contraseña">Contraseña</label>
            </div>
            <p class="recuperarContra">
                <a href="#">Recuperar contraseña</a>
            </p>
            <input type="submit" class="btn" value="Ingresar" name="Ingresar"> <!-- Asegúrate de que el nombre coincida con el del PHP -->
            
            <div class="links">
                <p>¿No tienes una cuenta?</p>
                <a class="botonCrear" href="registro.php">Crear cuenta</a>
            </div>
        </form> 
    </div>
</body> 
</html>
