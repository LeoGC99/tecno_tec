<?php

include("conexion.php"); 
// Verifica si se envió el formulario
if (isset($_POST["Enviar"])) {
  
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);

    // Prepara la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO clientes (nombre, email, telefono, direccion) 
            VALUES ('$nombre', '$email', '$telefono', '$direccion')";

    // Ejecuta la consulta y maneja posibles errores
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Datos enviados correctamente');
                window.location='pagprinc.php'; // Redirige a una página de agradecimiento o similar
              </script>";
    } else {
        echo "<script>
                alert('Error al enviar los datos: " . $conn->error . "');
                window.location='form_cliente.php'; // Redirige al formulario en caso de error
              </script>";
    }

    // Cierra la conexión
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/estilos_form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recolección de Información</title>
</head>
<body>

  <div class="contenedor">
    <div class="barra_nave">
        <div class="logo">
            <img src="../imagenes/tecno_tech.png" width="155px">
        </div>     
        <nav>
                <ul>
                    <li><a href="pagprinc.php">Inicio</a></li>
                    <li><a href="form_cliente.php">Cliente</a></li>
                    <li><a href="form_prod.php">Productos</a></li>
                    <li><a href="form_ped_prod.php">Pedido/producto</a></li>
                    <li><a href="form_categ_prod.php">Categoria/producto</a></li>
    
                </ul>
        </nav>
        <div class="iconos">
            <a href="#"><i class='bx bx-search-alt-2'></i></a>
            <a href="../index.html"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a> 
            <div class="bx bx-menu" id="menu_icon"></div>  
        </div>   
    </div>
</div>

<p class="title">Información Cliente</p>

  <section class="form-register">
        <form method="post" action="">
            <h4>Ingresar Nombre Completo</h4>
            <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
            
            <h4>Ingresar Email </h4>
            <input class="controls" type="email" name="email" placeholder="Ingrese su email" required>
            
            <h4>Ingresar Número Telefónico</h4>
            <input class="controls" type="tel" name="telefono" placeholder="Ingrese su número telefónico" required>
            
            <h4>Ingresar Dirección</h4>
            <input class="controls" type="text" name="direccion" placeholder="Ingrese su dirección" required>
            
            <input class="botons" type="submit" value="Enviar" name="Enviar">
        </form>
    </section>
    
</body>
</html>
