<?php
include("conexion.php");

if (isset($_POST["Registrarse"])) {
    $Nombre = mysqli_real_escape_string($conn, $_POST['Nombre']);
    $Apellido = mysqli_real_escape_string($conn, $_POST['Apellido']);
    $Correo = mysqli_real_escape_string($conn, $_POST['Correo']);
    $Contraseña = password_hash(mysqli_real_escape_string($conn, $_POST['Contraseña']), PASSWORD_DEFAULT); 

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    $sqlusuario = "SELECT id FROM bbaseregister WHERE Correo = '$Correo'";
    $resultadocorreo = $conn->query($sqlusuario);
    $filas = $resultadocorreo->num_rows;

    if ($filas > 0) {
        echo "<script>
                alert('El usuario ya existe');
                window.location='index.php';
              </script>";
    } else {
        $sql = "INSERT INTO bbaseregister (Nombre, Apellido, Correo, Contraseña) 
                VALUES ('$Nombre', '$Apellido', '$Correo', '$Contraseña')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Usuario registrado correctamente');
                    window.location='index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error al registrar el usuario: " . $conn->error . "');
                    window.location='index.php';
                  </script>";
        }
    }

   
    $conn->close();
}
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
<!--Esta seccion es para el registro, elaboramos el formulario .-->
<div class="container" id="form1">
    <h1 class="titulo_registro">Registro.</h1>
    <form method="post" action="">
        <div class="input_grupo">
            <i class="fas fa-user"></i>
            <input type="text" name="Nombre" id="PriNombre"placeholder="Ingrese su primer nombre" required>
            <label for="PriNombre">Primer Nombre</label>
        </div>
        <div class="input_grupo">
            <i class="fas fa-user"></i>
            <input type="text" name="Apellido" id="Apellido"placeholder="Ingrese su apellido" required>
            <label for="Apellido">Apellido</label>
        </div>
        <div class="input_grupo">
            <i class="fas fa-envelope"></i>
            <input type="email" name="Correo" id="Correo"placeholder="Ingrese su correo" required>
            <label for="Correo">Correo</label>
        </div>
        <div class="input_grupo">
            <i class="fas fa-lock"></i>
            <input type="password" name="Contraseña" id="Contraseña"placeholder="Ingrese la contraseña nueva " required>
            <label for="Contraseña">Contraseña</label>
        </div>
        <input type="submit" class="btn" value="Registrarse" name="Registrarse">
        <div class="links">
            <p>¿Ya tienes una cuenta?</p>
         <a class="botonCrear"href="index.php">Iniciar sesion</a>

        </div>
    </form> 

</div>