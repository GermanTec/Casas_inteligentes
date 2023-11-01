<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTech</title>
    <!--Tipo de letra luna-->
    <link href="https://fonts.googleapis.com/css2?family=Luna&display=swap" rel="stylesheet">
    <!--Fin Tipo de letra luna-->
    <!--letra-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tektur:wght@400;500;600;700;800;900&family=Work+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    <!--Fin letra-->    
    <!--Para pie de pagina-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/nav-enca-pie.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/Conocenos.css">
    	  
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    
</head>
<body>
  
  <!-- Encabezado-->
  <header class="header">
    <div class="container">
      <ul class="detalles ">
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
                    <li><a href="#">Perfil</a></li>
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
      <li><a href="productos.php">Producto</a></li>
      <li><a href="conocenos.php">Conocenos</a></li>
    </ul>
  </nav>
  <!-- Fin Navegador--> 

  <div class="Scroll">
    <p>Conocenos</p>
    <h1>HomeTech</h1>
  </div>

  <main>
    <div class="cards-component py-5">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="card frase-mamalona2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img src="../img/1.jpg" class="card-img-top" alt="celene">
              <div class="card-body">
                <h5 class="card-title text-center">FrontEnd Celene</h5>
                <p class="card-text text-justify text-center">
                  Como Desarrollador de Frontend, mi pasión radica en la creación de experiencias de usuario excepcionales. Utilizo HTML, CSS y JavaScript, junto con frameworks como React, Angular o Vue.js, para construir interfaces interactivas y visualmente atractivas. Me especializo en la optimización del rendimiento y la compatibilidad con múltiples dispositivos. Colaboro estrechamente con diseñadores y desarrolladores de backend para garantizar una integración perfecta. Siempre me mantengo actualizado con las últimas tendencias en desarrollo web para ofrecer soluciones innovadoras y atractivas.
                </p>
              </div>
            </div>
  
          </div>
          <div class="col-4">
            <div class="card frase-mamalona2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img src="../img/german.jpeg" class="card-img-top" alt="german">
              <div class="card-body">
                <h5 class="card-title text-center">BackEnd German</h5>
                <p class="card-text text-justify text-center">
                  Como Desarrollador de Backend, mi enfoque es el diseño e implementación de la lógica y funcionalidades de aplicaciones y sistemas web. Utilizo lenguajes como Python, Java o PHP, junto a frameworks como Django, Spring o Laravel, para crear APIs robustas y seguras que conecten el frontend con el backend. También me especializo en la gestión y optimización de bases de datos. Mi objetivo es garantizar un rendimiento eficiente y una experiencia de usuario de alta calidad, priorizando la seguridad y la escalabilidad.      
                </p>
              </div>          
            </div>
            
          </div>
          <div class="col-4">
            <div class="card frase-mamalona2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img src="../img/josiel.jpg" class="card-img-top" alt="josiel">
              <div class="card-body">
                <h5 class="card-title text-center">FrontEnd Josiel</h5>
                <p class="card-text text-justify text-center">
                  Como Encargado de apoyar con el diseño y depurar errores, aporto soluciones visuales y funcionales en proyectos, colaboro estrechamente con el equipo de desarrollo, identifico y resuelvo errores en software utilizando mi conocimiento en lenguajes de programación y herramientas de depuración. Mi enfoque en la mejora continua y mi pasión por el diseño garantizan la entrega de productos de alta calidad que superen las expectativas del cliente.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--SCRIPT BOOTSTRAP-->
  </body>

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
</html>