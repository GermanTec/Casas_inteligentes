<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTech</title>
    <!--Para pie de pagina-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/nav-enca-pie.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/iniciarSesion.css">
<!--FinPara pie de pagina-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"><!--Para el icono en bootstrap-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--css only BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Biblioteca jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Biblioteca Slick Carousel -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</head>
<body class="body-C">
  <!-- Encabezado-->
    <header class="header">
      <div class="container">
        <ul class="detalles">
          <li><a href="#">Contactos</a></li>
          <!--<li><a href="#">Idiomas</a><i class="bi bi-globe"></i></li>-->
          <li><a href="iniciarSesion.php">Login</a><i class="bi bi-person"></i></li>
        </ul>
      </div>
    </header>
    <!-- Fin Encabezado-->  
    
    <div class="spacer"></div> <!-- Agrega un div separador -->
     
    <!-- Navegador-->
    <nav>
    <img src="../img/logo.png" width="200px" alt="" style="position: absolute; top:-6px; right:85%;">
      <div class="logo"></div>
      <div class="logo"></div>
      <div class="logo"></div>
      <div class="logo"></div>
      <ul>
        <li><a href="inicio.php">inicio</a></li>
        <li><a href="#">Producto</a></li>
        <li><a href="#">Conocenos</a></li>
      </ul>
    </nav>
    <!-- Fin Navegador--> 
    
    <main> <!--Inicio main contendio principal que tiene-->
      
    <section>
    <div class="container w-75 mt-5 rounded shadow my-5">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
            <img class="h-80 w-80 overflow-hidden" src="https://images.ecestaticos.com/qOH0piX4c_w4qiqxFSqoZemMInM=/173x17:1325x881/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F6b9%2Fc0d%2Faa1%2F6b9c0daa1808d95e572bbccf11764ae4.jpg" alt="">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="../img/logo.png" width="230px" alt="" style="position: relative; top: 0px; left: -100px; ">
                </div>
                <h2 class="fw-bold text-center py-2">Registrate</h2>
                <form action="registrarse.php" method="post">
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese el Nombre de Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Ingrese Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese el Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese CP</label>
                        <input type="text" class="form-control" name="cp" placeholder="Codigo Postal">
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Numero de telefono">
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Ingrese Correo</label>
                        <input type="text" class="form-control" name="correo" placeholder="Correo electronico">
                    </div>
                    <hr>
                    <?php
                    if (isset($_GET['errorReg'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['errorReg']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bienReg'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bienReg']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>

                    
                    </div>
                </form>
 
            </div>
        </div>
    </div>
   </section>

  


    </main><!--Fin main-->
    


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

     
      
     <!--SCRIPT BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


  </body>
</html>