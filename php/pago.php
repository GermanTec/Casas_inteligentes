<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTech</title>

    <!--letra-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tektur:wght@400;500;600;700;800;900&family=Work+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--Fin letra-->    
    <!-- Hoja de estilos para iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Enlace a Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Biblioteca Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/nav-enca-pie.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/pago.css">

    <!-- Estilos para Stripe -->
    <style>
        /* Ajusta el estilo según tus preferencias */
        #card-element {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<div class="spacer"></div> <!-- Agrega un div separador -->

<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="container">
            <ul class="detalles">
                <li><a href="#">Contactos</a></li>
                <?php
                session_start(); 
                    if (isset($_SESSION['usuario'])==null || isset($_SESSION['usuario'])=='') {
                ?>
                    <li><a href="iniciarSesion.php">Login</a><i class="bi bi-person gap-3"></i></li>
                    
                <?php    
                    }else{
                    $nombre=$_SESSION['usuario'];
                    ?>
                    <li style="width: 150px;"><a href="#" onclick="cortador()">
                    <?php
                    
                    echo $nombre;
                    ?>
                    </a><i class="bi bi-person gap-3"> </i>
                    <div class="perfil">    
                            <ul id="extend">
                            <li><a href="perfil.php">Perfil</a></li>
                            <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
                            </ul>
                            </div>
                    </li>
                    <?php 
                    } 
                ?>
            </ul>
        </div>
    </header>

    <!-- Navegación -->
    <nav>
        <img src="../img/logo.png" width="200px" alt="" style="position: absolute; top: -6px; right: 85%;">
        <div class="logo"></div>
        <div class="logo"></div>
        <div class="logo"></div>
        <div class="logo"></div>
        <ul>
            <li><a href="inicio.php">inicio</a></li>
            <li><a href="productos.php">Producto</a></li>
            <li><a href="conocenos.php">Conócenos</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <!-- Nuevo formulario de pago con Stripe -->
                <div class="row">
                    <div class="col-6">
                        <h2>Detalle Pago</h2>
                        <!-- Agregar detalles de productos dinámicamente desde PHP -->
                        <!-- Ejemplo PHP: -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (isset($_SESSION['carrito'])) {
                                        $carrito = $_SESSION['carrito'];
                                        $total=0;
                                        
                                    foreach ($carrito as $producto) {
                                        $total += $producto['precio_producto'];
                                        ?>
                                        <tr>
                                            <td><img src="<?php echo $producto['imagen'];?>" alt="<?php echo $producto['producto'];?>" width="100px"></td>
                                            <td><?php echo $producto['producto']?></td>
                                            <td><?php echo $producto['cantidad'];?></td>
                                            <td><?php echo $producto['precio_producto'];?></td>
                                        </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="3">No hay productos disponibles.</td></tr>';
                                    }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"><strong>Total:</strong></td>
                                    <td>$<?php echo $total; ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-6">
                        <!-- Puedes agregar más campos si es necesario -->
                        <div id="paypal-button-container"></div>
                        <p id="result-message"></p>
                    </div>
                </div>
        </div>
    </main>



    <br>
    <br>
    <br>    
    <!-- Pie de página -->
    <footer class="footer-distributed">

      <div class="footer-left">
          <h3>Bienvenido a <span>HomeTech</span></h3>

          <p class="footer-links">
              <a href="#">Home</a>
              |
              <a href="#">About</a>
              |
              <a href="#">Contact</a>
              |
              <a href="#">Blog</a>
          </p>

          <p class="footer-company-name">Copyright © 2021 <strong>SagarDeveloper</strong> All rights reserved</p>
      </div>

      <div class="footer-center">
          <div>
              <i class="fa fa-map-marker"></i>
              <p><span>Ghaziabad</span>
                  Delhi</p>
          </div>

          <div>
              <i class="fa fa-phone"></i>
              <p>+91 74**9**258</p>
          </div>
          <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
          </div>
      </div>
      <div class="footer-right">
          <p class="footer-company-about">
              <span>About the company</span>
              <strong>Sagar Developer</strong> is a Youtube channel where you can find more creative CSS Animations
              and
              Effects along with
              HTML, JavaScript and Projects using C/C++.
          </p>
          <div class="footer-icons">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
      </div>
  </footer>
    <!-- Fin del pie de página -->


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/inicio.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Script de PayPal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AQPukYU-3vzIKgX_setIUIxBPGaAsnZsVKp0yBMok9stnASaUkigL2QVVYj_ja6ZSqHYntWHfdNVilwy"></script>

       <script>
    // Configuración de PayPal
    paypal.Buttons({
        createOrder: function (data, actions) {
            // Configuración del pedido para PayPal
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '10.00' // Reemplaza con el monto de tu compra
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            // Acciones después de la aprobación del pago
            // Puedes realizar acciones adicionales aquí
            alert('Pago de PayPal aprobado');
        }
    }).render('#paypal-button-container');
</script>

</body>
</html>