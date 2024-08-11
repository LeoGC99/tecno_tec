<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

if (isset($_POST["Registrar"])) {
    $nombre_producto = mysqli_real_escape_string($conn, $_POST['nombre_producto']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    $precio = mysqli_real_escape_string($conn, $_POST['precio']);
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
    $peso = mysqli_real_escape_string($conn, $_POST['peso']);

    // Reemplaza las comas por puntos en el precio
    $precio = str_replace(',', '.', $precio);

    $sql = "INSERT INTO productos (nombre_producto, stock, precio, modelo, marca, peso) 
            VALUES ('$nombre_producto', '$stock', '$precio', '$modelo', '$marca', '$peso')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Datos enviados correctamente');
                window.location='../html/gracias.html';
              </script>";
    } else {
        echo "<script>
                alert('Error al enviar los datos: " . $conn->error . "');
                window.location='../html/form_prod.html';
              </script>";
        echo "Error SQL: " . $conn->error; // Para depuración
    }

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

<p class="title">Información Producto</p>

  <section class="form-register">
        <form method="post" action=""> <!-- Asegúrate de que el archivo PHP está en la ubicación correcta -->
            <h4>Nombre del Producto</h4>
            <input class="controls" type="text" name="nombre_producto" placeholder="Ingrese el nombre del producto" required>
            
            <h4>Stock del producto</h4>
            Cantidad Unidad:
            <input type="number" name="stock" min="0" max="100" step="10" value="30" required>
            
            <h4>Ingresar Precio del producto</h4>
            <input class="controls" type="number" name="precio" step="0.01" placeholder="Ingrese el precio del producto" required>

            
            <h4>Ingresar Modelo del Producto</h4>
            <input class="controls" type="text" name="modelo" placeholder="Ingrese el modelo del producto" required>
            
            <h4>Ingresar Marca del Producto</h4>
            <input class="controls" type="text" name="marca" placeholder="Ingrese la marca del producto" required>
            
            <h4>Ingresar Peso del Producto</h4>
            Cantidad KG:
            <input type="number" name="peso" min="0.1" max="1000" step="10" value="30" required>

            <input class="botons" type="submit" value="Enviar" name="Registrar">
        </form>
    </section>
    
</body>
</html>
