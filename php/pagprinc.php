<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoTech</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
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
                <a href="#"><i class='bx bx-search-alt-2' ></i></a>
                <a href="../index.html"><i class='bx bx-user'></i></a>
                <a href="#"><i class='bx bx-cart'></i></a> 
                <div class="bx bx-menu" id="menu_icon"></div>  
            </div>   
        </div>
    </div>

    <div class="fila">
        <div class="col-2">
            <h1> TecnoTech<br> Donde econtraras  la tecnología más avanzada.</h1>
            <h6> TecnoTech, donde la innovación y la tecnología se encuentran.<br> Explora nuestra selección de dispositivos de última generación y soluciones tecnológicas líderes.<br> Entra en un mundo de conectividad y entretenimiento sin límites. Tu futuro tecnológico comienza aquí.</h6>
        </div>
        <div class="col-2">
            <img src="../imagenes/fon.png" >
        </div>

    </div>
    <div class="text-central">
        <h2>Productos de la semana</h2>

    </div>
    <!---Sección núnero 2 productos-->
    <section class="productos">
        
        <div class="fila_product">
            <img src="../imagenes/iphone.jpg" width="300px" > 
            <div class="titulo_text">
                <h5>Disponible</h5>
            </div>
            <div class="corazon_icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="calificacion">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
            
            </div>
            <div class="precio">
                <h4>Iphone 14pro max</h4>
                <p>$3.000.000</p>
            </div>
        </div>

            <div class="fila_product">
                <img src="../imagenes/audifonos.jpg" width="300px" > 
                <div class="titulo_text">
                    <h5>Disponible</h5>
                </div>
                <div class="corazon_icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="calificacion">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                
                </div>
                <div class="precio">
                    <h4>Audifonos JBL</h4>
                    <p>$1.000.000</p>
                </div>
            </div>
    
                <div class="fila_product">
                    <img src="../imagenes/mac.jpg" width="300px" > 
                    <div class="titulo_text">
                        <h5>Disponible</h5>
                    </div>
                    <div class="corazon_icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="calificacion">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    
                    </div>
                    <div class="precio">
                        <h4>iMac 24 Con Chip M1</h4>
                        <p>$8.000.000</p>
                    </div>
                </div>

                <div class="fila_product">
                        <img src="../imagenes/manilla.jpg" width="300px" > 
                        <div class="titulo_text">
                            <h5>Disponible</h5>
                        </div>
                        <div class="corazon_icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="calificacion">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        
                        </div>
                        <div class="precio">
                            <h4>Apple Watch</h4>
                            <p>$1.300.000</p>
                        </div>
                </div>
                        <div class="camara">
                            <img src="../imagenes/camara.jpg" width="300px" > 
                            <div class="titulo_text">
                                <h5>Disponible</h5>
                            </div>
                            <div class="corazon_icon">
                                <i class='bx bx-heart'></i>
                            </div>
                            <div class="calificacion">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            
                            </div>
                        
                            <div class="precio">
                                <h4>Canon 4HJKL</h4>
                                <p>$3.000.000</p>
                            </div>
                        </div>
                            <div class="combo">
                                <img src="../imagenes/combo.jpg" width="300px" > 
                                <div class="titulo_text">
                                    <h5>Disponible<br>Ps4+2 mandos+Tv Samsung 32 pulgadas.</h5>
                                </div>
                                <div class="corazon_icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                                <div class="calificacion">
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star-half' ></i>
                                
                                </div>
                                <div class="precio">
                                    <h4></h4>
                                    <p>$5.000.000</p>
                                </div>
                            </div>
                
                
                
                        
                </div>

        
        
        
                </div>
    
            </div>



        </div>


        
    </section>

    <script src="index.js"></script>
    

    
    
    
    
</body>
<div class="container my-5">

    <section class="pie">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #69c979;">
     
      <div class="containe">
  
        <section class="text_pie">
          <p class="d-flex justify-content-center align-items-center">
            Contactanos
            <button type="button" class="btn btn-outline-light btn-rounded">
              Aquí
            </button>
          </p>
        </section>
       
      </div>
      
  
        <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright
        <a class="text-white" href="https://mdbootstrap.com/"><index class="hmtl"></index></a>
      </div>
    
    </footer>
 
  </section>
    
  </div>
 
</html>