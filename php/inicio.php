<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTech</title>
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
    <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
<!-- ya hice un cambio german-->
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
    
    <main class="fondo"> <!--Inicio main contendio principal que tiene-->
      <div class="conatainer">
        
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
      
          <div class="carousel-item active d-item">
            <img src="https://www.icasas.mx/noticias/wp-content/uploads/2016/04/sala-inteligente-1024x475.jpg" class="d-block w-100 d-img" alt="slider 3">
            <div class="carousel-caption top-0 end-50 mt-4"> <!-- para la derecha start-50-->  <!-- para la izquierda end-100-->
              <p class="mt-5 fs-3 text-uppercase" style="font-weight: bold; color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 1);">
                Descubre la OLA DE AVENTURAS DEL FUTURO
              </p>
              <h1 class="display-1 fw-bolder text-capitalize" style="color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 1);">
              HomeTech
              </h1>               
              <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Información</button> <!-- NOOO LLEVA A OTRA PAGINA-->
            </div>
          </div>
      
          <div class="carousel-item d-item">
            <img src="https://arqzon.com.mx/wp-content/uploads/2022/11/CASA-INTELIGENTE-1-1024x561-1.jpg" class="d-block w-100 d-img" alt="slider 2">
            <div class="carousel-caption top-0 mt-4" style="padding-top: 100px;"> <!-- para la derecha start-50-->  <!-- para la izquierda end-100-->
              <p class="mt-5 fs-3 text-uppercase" style="font-weight: bold; color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 1);">
                Descubre la ciudad 
              </p>
              <h1 class="display-1 fw-bolder text-capitalize" style="color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 1); margin-top: 10px;">
                HomeTech
              </h1>              
              <a href="/html/productos.html" class="btn btn-primary px-4 py-2 fs-5 mt-5">Información</a> <!--LLEVA A OTRA PAGINA-->
            </div>
          </div>
          
          
          
      
          <div class="carousel-item d-item">
            <img src="https://i0.wp.com/www.blog.doto.com.mx/wp-content/uploads/2021/08/banner-casa-inteligente-blog-doto.jpg?fit=1240%2C490&ssl=1" class="d-block w-100 d-img" alt="slider 1">
            <div class="carousel-caption top-0 start-50 mt-4"> <!-- para la derecha start-50-->  <!-- para la izquierda end-100-->
              <p class="mt-5 fs-3 text-uppercase" style="font-weight: bold; color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 5);">
                Descubre la Tecnologia que te rodea
              </p>
              <h1 class="display-1 fw-bolder text-capitalize" style="color: black; text-shadow: 2px 2px 4px rgba(255, 255, 255, 5);">
              HomeTech
              </h1>              
              <a href="/html/productos.html" class="btn btn-primary px-4 py-2 fs-5 mt-5">Información</a> <!--LLEVA A OTRA PAGINA-->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
<!--Inicia el coallge *****************************************************************************************************************************************************************************************************************-->
      <section class="container my-5">
        <div class="row">
          <div class="col-md-8 imgEfecto">
            <figure class="figure">
              <img src="https://i0.wp.com/wokii.com/wp-content/uploads/2023/01/shutterstock-1935871447.jpg?fit=1000%2C667&ssl=1" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Innovación </h3>
                <p>
                  "La tecnológica llega a nuestros hogares: desde sistemas de seguridad inteligentes hasta dispositivos conectados, la tecnología transforma nuestras casas en espacios futuristas y eficientes."
                </p>
              </div>
            </figure>
          </div>
          <div class="col-md-4 imgEfecto">
            <figure class="figure">
              <img src="https://http2.mlstatic.com/D_NQ_NP_985351-MLM43942695502_102020-O.jpg" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Alexa</h3>
                <p>
                  "El asistente de voz que ha transformado nuestros hogares, brindando comodidad y funcionalidad con solo una palabra."
                </p>
              </div>
            </figure>
          </div>
          <div class="col-md-4 imgEfecto">
            <figure class="figure">
              <img src="https://arqzon.com.mx/wp-content/uploads/2022/11/KIT-DE-CINTA-LED-RGB-CCT-INTELIGENTE-WIFI-1024x1024-1-1024x1024.jpg" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Seguridad que <br> responde a tu voz</h3>
                <p>
                  "La tecnología de reconocimiento de voz está revolucionando la protección en el hogar, permitiéndote controlar y supervisar tu seguridad con comandos de voz intuitivos y manos libres."
                </p>
              </div>
            </figure>
          </div>
          <div class="col-md-8 imgEfecto">
            <figure class="figure">
              <img src="https://www-file.huawei.com/-/media/corp2020/home/box/4/indonesia-pln-en.jpg" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Simplificando la vida cotidiana</h3>
                <p>
                  "La tecnología inteligente en el hogar está cambiando la forma en que realizamos tareas diarias, desde gestionar iluminación y temperatura hasta controlar electrodomésticos, brindando mayor comodidad y eficiencia en nuestra rutina diaria."
                </p>
              </div>
            </figure>
          </div>
          <div class="col-md-4 imgEfecto">
            <figure class="figure">
              <img src="https://www-file.huawei.com/-/media/corp2020/home/box/4/oceanstor.jpg" class="figure-img img-fluid rounded" alt="...">
              
              <div class="capa">
                <h3>Visión futurista</h3>
                <p>
                  "hogares y asta edificios inteligentes que combinan tecnología y diseño para una vida más eficiente, cómoda y sostenible."                </p>
              </div>            </figure>
          </div>
          <div class="col-md-4 imgEfecto">
            <figure class="figure">
              <img src="https://d1ih8jugeo2m5m.cloudfront.net/2022/06/elementos-de-un-plan-de-negocios-1200x685.jpg" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Planificando el futuro con tecnología</h3>
                <p>
                  "La integración de soluciones inteligentes en la planificación urbana y arquitectónica nos guía hacia ciudades sostenibles, conectadas y preparadas para los desafíos del mañana."
                </p>
              </div>
            </figure>
          </div>
          <div class="col-md-4 imgEfecto">
            <figure class="figure">
              <img src="https://www-file.huawei.com/-/media/corp2020/home/box/4/carrier-next-gen-broadband.jpg" class="figure-img img-fluid rounded" alt="...">
              <div class="capa">
                <h3>Expandiendo nuestra visión por todo el mundo</h3>
                <p>
                  "Llevando la tecnología inteligente a cada rincón del globo, creando conexiones globales y mejorando la vida de las personas en todo el planeta."
                </p>
              </div>
            </figure>
          </div>
        </div>
      </section>
<!--Finaliza el collge *****************************************************************************************************************************************************-->
      
<!--Inicio cuadro de tres wifi, bluetooth y voz *****************************************************************************************************************************************************-->

      <section class="p-5" id="services">
        <div class="container py-5">
          <div class="row text-center g-4">
            <div class="col-md-4 col-sm-12">
              <div class="card bg-dark custom-card frase-mamalona text-light p-3">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-router"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    Wifi
                  </h3>
                  <p class="card-text">
                    "Conecta tu hogar al futuro con dispositivos inteligentes WiFi: controla, automatiza y disfruta de tu entorno con un solo toque."
                  </p>
                  <a href="#" class="btn btn-primary">Más</a>
                </div>
              </div>
            </div>
      
            <div class="col-md-4 col-sm-12">
              <div class="card bg-dark custom-card frase-mamalona text-light p-3">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-bluetooth"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    Bluetooth
                  </h3>
                  <p class="card-text">   
                    "Descubre la conveniencia inalámbrica: dispositivos inteligentes que funcionan con WiFi y Bluetooth, brindándote control total y conectividad sin límites."
                  </p>
                  <a href="#" class="btn btn-primary">más</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
              <div class="card bg-dark custom-card frase-mamalona text-light p-3">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-mic"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    Voz
                  </h3>
                  <p class="card-text">
                    "Experimenta y domina tu entorno con solo tu voz: control por comandos de voz, convierte tu hogar en un espacio inteligente y conectado."
                  </p>
                  <a href="#" class="btn btn-primary">Más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!--Fin  de tres cuadrso wifi, bluetooth y voz-->

<!--Inicio Dilema*****************************************************************************************************************************************************-->

      <section class="container">
        <div class="col-md-12 col-sm-12">
          <div class="card bg-info custom-card text-dark p-3 ">
            <div class="card-body text-center">
              <div class="h1 mb-3">
              </div>
              <p class="card-text">
                "Revoluciona tu hogar con inteligencia sin límites: vive conectado, vive en el futuro."
            
            </div>
          </div>
        </div>
      </section>
<!--Fin Dilema *****************************************************************************************************************************************************-->

<!--Inicio dilemas y asi xd *****************************************************************************************************************************************************-->

      <section class="p-5" id="services">
        <div class="container py-5">
          <div class="row text-center g-4">

            <div class="col-md-3 col-sm-12">
              <div class="card bg-transparent border border-0 custom-card text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-rocket-takeoff"></i>
                  </div>
                  <h3 class="card-title mb-3">
                    Misión
                  </h3>
                  <p class="card-text">
                    "Conectar hogares, simplificar vidas: nuestra misión es llevar la inteligencia y comodidad del futuro a cada hogar."                  </p>
                  <a class = "link link--2" href="#" class="btn btn-transparent">Más</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-12">
              <div class="card bg-transparent border border-0 custom-card text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-eye"></i>                  
                  </div>
                  <h3 class="card-title mb-3">
                    Vision
                  </h3>
                  <p class="card-text">
                    "Conectar hogares, simplificar vidas: nuestra misión es llevar la inteligencia y comodidad del futuro a cada hogar."                  </p>
                  <a class = "link link--2" href="#" class="btn btn-transparent">Más</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-12">
              <div class="card bg-transparent border border-0 custom-card text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plant" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M7 15h10v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-4z" />
                      <path d="M12 9a6 6 0 0 0 -6 -6h-3v2a6 6 0 0 0 6 6h3" />
                      <path d="M12 11a6 6 0 0 1 6 -6h3v1a6 6 0 0 1 -6 6h-3" />
                      <path d="M12 15l0 -6" />
                    </svg>               
                  </div>
                  <h3 class="card-title mb-3">
                    Ecologico
                  </h3>
                  <p class="card-text">
                    "HomeTech: Conectando hogares inteligentes hacia un futuro sostenible, liderando la lucha contra el cambio climático mediante la digitalización."                
                    <a class = "link link--2" href="#" class="btn btn-transparent">Más</a>

                  </div>
              </div>
            </div>


            <div class="col-md-3 col-sm-12">
              <div class="card bg-transparent border border-0 custom-card text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brain" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M15.5 13a3.5 3.5 0 0 0 -3.5 3.5v1a3.5 3.5 0 0 0 7 0v-1.8" />
                      <path d="M8.5 13a3.5 3.5 0 0 1 3.5 3.5v1a3.5 3.5 0 0 1 -7 0v-1.8" />
                      <path d="M17.5 16a3.5 3.5 0 0 0 0 -7h-.5" />
                      <path d="M19 9.3v-2.8a3.5 3.5 0 0 0 -7 0" />
                      <path d="M6.5 16a3.5 3.5 0 0 1 0 -7h.5" />
                      <path d="M5 9.3v-2.8a3.5 3.5 0 0 1 7 0v10" />
                    </svg>               
                  </div>
                  <h3 class="card-title mb-3">
                    Innovación
                  </h3>
                  <p class="card-text">
                    "HomeTech: Conectando hogares inteligentes hacia un futuro sostenible, liderando la lucha contra el cambio climático mediante la digitalización."               
                    <a class = "link link--2" href="#" class="btn btn-transparent">Más</a>

                  </div>
              </div>
            </div>


          </div>
        </div>
      </section>
<!--Fin dilemas y asi xd *****************************************************************************************************************************************************-->
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
    <script src="../js/inicio.js"></script>

  </body>
</html>