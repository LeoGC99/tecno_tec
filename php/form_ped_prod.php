<?php
include("conexion.php");

if (isset($_POST['registrar'])) {
    // Verifica si el campo 'unidades' está definido y no está vacío
    if (isset($_POST['unidades']) && !empty(trim($_POST['unidades']))) {
        $unidades = trim($_POST['unidades']);
        
        // Asegúrate de que la conexión esté establecida correctamente
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }
        
        // Prepara la consulta SQL para insertar los datos
        $consulta = "INSERT INTO pedidos (unidades) VALUES ('$unidades')";
        $resultado = mysqli_query($conn, $consulta);
        
        if ($resultado) {
            echo '<h3 class="ok"></h3>';
        } else {
            echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}

$conn->close();
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

<p class="title">Información Pedido de Producción</p>

  <section class="form-register">
  <form method="post" action="">
    <label for="unidades">Unidades:</label>
    <input type="number" name="unidades" id="unidades" min="0" max="1000" step="10" required>
    <input type="submit" name="registrar" value="Registrar">
</form>

    </section>
    
</body>
</html>
