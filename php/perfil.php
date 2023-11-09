<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTech</title>

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tektur:wght@400;500;600;700;800;900&family=Work+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    
    <!-- Hoja de estilos para iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Enlace a Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Biblioteca Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/nav-enca-pie.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="container">
            <ul class="detalles">
                <li><a href="#">Contactos</a></li>
                <?php
                session_start(); 
                if (isset($_SESSION['usuario']) == null || isset($_SESSION['usuario']) == '') {
                ?>
                <li><a href="clientes.php">Login</a><i class="bi bi-person gap-3"></i></li>
                <?php    
                } else {
                    $nombre = $_SESSION['usuario'];
                ?>
                <li style="width: 150px;">
                    <a href="#" onclick="cortador()">
                        <?php
                        echo $nombre;
                        ?>
                    </a><i class="bi bi-person gap-3"> </i>
                    <div class="perfil">    
                        <ul id="extend">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="cerrarSesion.php">Cerrar sesión</a></li>
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

    <!-- Contenido principal -->

    <div class="spacer"></div> <!-- Agrega un div separador -->

    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">Perfil</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">
                     <i class="bi bi-person-circle"></i>
                    Perfil
                </h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button id="button-informacion" class="boton-menu boton-categoria active">
                            <i class="bi bi-hand-index-thumb-fill"></i> Información de contacto
                        </button>
                    </li>
                    <li>
                        <button id="button-financiera" class="boton-menu boton-categoria">
                            <i class="bi bi-hand-index-thumb"></i> Información Financiera
                        </button>
                    </li>
                    <li>
                        <button id="button-personal" class="boton-menu boton-categoria">
                            <i class="bi bi-hand-index-thumb"></i> Información Personal
                        </button>
                    </li>
                    <li>
                        <button id="button-configuraciones" class="boton-menu boton-categoria">
                            <i class="bi bi-hand-index-thumb"></i> Configuraciones
                        </button>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="./carrito.html">
                            <i class="bi bi-x-circle"></i><span>cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main>
            
            <div id="informacion-contacto" class="contenido">
                <div class="container">
                    <div class="row">
                        <h1>Información de contacto</h1>
                    </div>
                    <!-- Primera fila -->
                    <div class="row mt-5">
                        <!-- Primera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">@email</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Número de teléfono</h5>
                                    <p class="card-text">@Tel</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">País</h5>
                                    <p class="card-text">@pais</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cuarta columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Código postal</h5>
                                    <p class="card-text">@codPost</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- segunda fila -->
                    <div class="row mt-5">
                        <!-- Primera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Colonia</h5>
                                    <p class="card-text">@col</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Calle</h5>
                                    <p class="card-text">@calle</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Referencas</h5>
                                    <p class="card-text">@ref</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cuarta columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Código postal</h5>
                                    <p class="card-text">@codPost</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="informacion-financiera" class="contenido" style="display: none;">
                <!-- Contenido de Información Financiera (oculto inicialmente) -->
                <h1>Información financiera</h1>
                <div class="container">
                    <div class="row">
                        <h1>Información de contacto</h1>
                    </div>
                    <!-- Primera fila -->
                    <div class="row mt-5">
                        <!-- Primera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Número de tarjeta</h5>
                                    <p class="card-text">@tar</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Titular de tarjeta</h5>
                                    <p class="card-text">@titular</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Fecha De Vencimiento</h5>
                                    <p class="card-text">@FechV</p>
                                    <a href="#" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="informacion-personal" class="contenido" style="display: none;">
                <!-- Contenido de Información Personal (oculto inicialmente) -->
                <h1>prueba 3</h1>
                
            </div>
            <div id="configuraciones" class="contenido" style="display: none;">
                <!-- Contenido de Configuraciones (oculto inicialmente) -->
                <h1>prueba 4</h1>
            </div>
        </main>
    </div>
    
    <!-- Pie de página -->
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Bienvenido a <span>HomeTech</span></h3>
            <p class="footer-links">
                <a href="#">Home</a> |
                <a href="#">About</a> |
                <a href="#">Contact</a> |
                <a href="#">Blog</a>
            </p>
            <p class="footer-company-name">Copyright © 2021 <strong>SagarDeveloper</strong> All rights reserved</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Ghaziabad</span> Delhi</p>
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
            <p class "footer-company-about">
                <span>About the company</span>
                <strong>Sagar Developer</strong> is a YouTube channel where you can find creative CSS Animations and Effects along with HTML, JavaScript, and C/C++ projects.
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
    <script src="../js/main.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/perfil-interaccion.js"></script>

    
</body>
</html>
