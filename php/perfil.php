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
    <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <!-- Biblioteca Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/nav-enca-pie.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="../css/carrito.css">
</head>
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

            <?php
      $contador=0;
          if (isset($_SESSION['carrito'])) {
            $carrito = $_SESSION['carrito'];
            
          foreach ($carrito as $producto) {

            $contador+=$producto['cantidad'];

          }
          }
          ?>
      <div>
      <div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
            
					</svg>
					<div class="count-products">
						<span id="contador-productos"><?php echo $contador ?></span>
					</div>
				</div>
        <?php
          
              ?>
				<div class="container-cart-products hidden-cart">
          <?php
          if (isset($_SESSION['carrito'])) {
            $carrito = $_SESSION['carrito'];
            $total=0;
            
          foreach ($carrito as $producto) {
           
            // Sumar al total
            $total += $producto['precio_producto'];
            
          ?>
					<div class="row-product hidden">
						<div class="cart-product">
              <!--Fragmento de datos del producto en el carrito-->
              
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito"><?php echo $producto['cantidad']; ?></span>
								<p class="titulo-producto-carrito"><?php echo $producto['producto']; ?></p>
								<span class="precio-producto-carrito">$<?php echo $producto['precio_producto']; ?></span>
							</div>
              <form action="Eliminar_carrito.php" method="post">
              <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
              <button type="submit" name="eliminar_producto">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
              </button>
              </form>
              <!--------------------------------------------------->
						</div>
					</div>
          <?php
          }
          ?>
					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$<?php echo $total?></span>
            <a href="pago.php"><button><i class="bi bi-cash-coin" style="font-size: 30px;"></i>Pagar</button></a>
            <?php
                }else{
            ?>
            <p class="cart-empty"><?php echo "El carrito está vacio.";?></p>
              <?php
            }
              ?>
					</div>
          
				</div>
			</div>
    </div>

    </ul>
    
    </nav>

    <!-- Contenido principal -->

    <div class="spacer"></div> <!-- Agrega un div separador -->
    
    <div class="wrapper">
        <aside>
        <?php
            include ('conexion.php');
            $consultar="SELECT idcliente FROM public.cliente WHERE usuario='$nombre'";
            $respuesta=pg_query($conexion,$consultar);
            
            
            
            if($fila=pg_fetch_assoc($respuesta)){
                $idCliente=$fila['idcliente'];
            }else{
                
                echo "No se encontraron resultados";
                
            }
            $perfil="SELECT foto FROM public.informacion_personal WHERE idcliente=$idCliente";
            $res_foto=pg_query($conexion,$perfil);
            if ($fila2=pg_fetch_assoc($res_foto)) {
                $foto=$fila2['foto'];
            }

                
            include ('conexion.php');
            $info_contacto="SELECT telefono, correo_electronico, pais, codigo_postal, colonia, calle, referencias, idcliente 
            FROM public.informacion_contacto WHERE idcliente=$idCliente";
            $respuesta2=pg_query($conexion,$info_contacto);
            
            while ($ic = pg_fetch_assoc($respuesta2)) {
                
            ?>
            <header>
                    <section class="contenedor-foto-perfil">
                    <button id="btnAbrirModal" class="boton-foto-perfil"><i class="bi bi-card-image"></i></button>
                        <img src="<?php if ($foto=="") {echo ""; }else{ echo $foto;}?>" alt="">                       
                    </section>    
            </header>
            <dialog id="modal" >
                <form action="../php/CRUD_INFOPersonal/ModificarFoto.php" method="post" style=" position:absolute; top:10px;
                        left:30px;">
                    <label for="">Ingrese la URL de la imagen que desea como perfil</label><br><br>
                    <input type="text" id="foto" name="foto" style="width: 380px;"><br><br>
                    <button class="btn btn-primary">Ingresar</button>
                </form>
                <button id="btnCerrarModal" class="btn btn-primary" style="position: absolute; top:98px; left:320px;">Cancelar</button>
            </dialog>
            
            <ul class="menu">
                    <li>
                        <button id="button-informacion" class="boton-menu boton-categoria active">
                            <i id="fill-informacion" class="bi bi-hand-index-thumb-fill"></i> Información De Contacto
                        </button>
                    </li>
                    <li>
                        <button id="button-financiera" class="boton-menu boton-categoria">
                            <i id="fill-financiera" class="bi bi-hand-index-thumb"></i> Información Financiera
                        </button>
                    </li>
                    <li>
                        <button id="button-personal" class="boton-menu boton-categoria">
                            <i id="fill-personal" class="bi bi-hand-index-thumb"></i> Información Personal
                        </button>
                    </li>
                    <li>
                        <button id="button-configuraciones" class="boton-menu boton-categoria">
                            <i id="fill-configuraciones" class="bi bi-hand-index-thumb"></i> Configuraciones
                        </button>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="cerrarSesion.php">
                            <i id="fill-cerrar" class="bi bi-x-circle"></i><span>cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
        </aside>
        <main>
        
            <div id="informacion-contacto" class="contenido" style="display: block;">
                <div class="container">
                        <h1>Información de contacto</h1>
                    <!-- Primera fila -->
                    <div class="row mt-5">
                        <!-- Primera columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                            <form action="../php/CRUD_INFOContacto/ModificarEmail.php" method="post">
                                <div class="card-body" id="EditEmal" style="display: none;">
                                        <label for="correo"><h5>Email</h5></label>
                                        <input type="text" class="form-control" name="correo" id="correo" style="width: 280px;" value="<?php echo $ic['correo_electronico']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                                <div class="card-body" id="MostrarEmail" style="display: block;">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text"><?php echo $ic['correo_electronico']?></p>
                                    <a href="#" onclick="toggleElementos('MostrarEmail','EditEmal')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                            <form action="../php/CRUD_INFOContacto/ModificarTelefono.php" method="post">
                                <div class="card-body" id="EditTel" style="display: none;">
                                        <label for="telefono"><h5>Número de teléfono</h5></label>
                                        <input type="text" class="form-control" name="telefono" id="telefono" style="width: 190px;" value="<?php echo $ic['telefono']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                                <div class="card-body" id="MostrarTel">
                                    <h5 class="card-title">Número de teléfono</h5>
                                    <p class="card-text"><?php echo $ic['telefono']?></p>
                                    <a href="#" onclick="toggleElementos('MostrarTel','EditTel')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarPais">
                                    <h5 class="card-title" >País</h5>
                                    <p class="card-text"><?php if ($ic['pais']=="") {
                                        echo "Sin pais*";
                                    }else{ echo $ic['pais'];}?></p>
                                    <a href="#" onclick="toggleElementos('MostrarPais','EditPais')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOContacto/ModificarPais.php" method="post">
                                <div class="card-body" id="EditPais" style="display: none;">
                                        <label for="pais"><h5>Pais</h5></label><br>
                                        <Select style="width: 250px; height:20px;" name="pais" id="pais">
                                         <script>
                                            // Lista de países
                                            var paises = ["Afghanistan", "Albania", "Argelia", "Alemania", "American Samoa", "Andorra", "Angola", "Anguilla", "Antartida", "Antigua y Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia-Herzegovina", "Botswana", "Bouvet Island", "Brasil", "Brit Ind Ocean Territory", "Brunei Darussalm", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Canary Islands", "Cape Verde", "Caymen Islands", "Central African Rep", "Chad", "Chile", "China", "Christmas Islands", "Cocos Islands", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Chipre", "Dem Rep. of Korea", "Dinamarca", "Djibouti", "Dominica", "East Timor", "Ecuador", "Egipto", "El Salvador", "Eritrea", "España", "Estados Unidos de America", "Estonia", "Etiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "Francia", "Guiana Francesa", "Polynesia Francesa", "French So. Territories", "Gabon", "Gambia", "Georgia", "Ghana", "Gibraltar", "Guinea Equatorial", "Grecia", "Greenland", "Grenada", "Guadalupe", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Heard, McDonald Island", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Inglaterra", "Iran", "Iraq", "Ireland", "Jamaica", "Japon", "Jordan", "Kazakhistan", "Kenia", "Kiribati", "Korea del Norte", "Kuwait", "Kyrqyzstan", "Laos", "Lativa", "Libano", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Madagascar", "Malawi", "Malaysia", "Maldivas", "Mali", "Malta", "Mariana Islands", "Marruecos", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Mozambique", "Myanmar", "Nambia", "Nauru", "Nepal", "Netherland Antilles", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue Island", "Norfolk Island", "Northern Mariana Island", "Norway", "OCE", "Oman", "Pacific Islands", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "Republica de Corea", "Republica Dominicana", "Reunion", "Romania", "Russian Federation", "Rwanda", "South Georgia Sandwich", "Saint Pierre Miguelon", "Samoa", "San Marino", "Sao Tomee and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierre Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somali Republic", "South Africa", "South Korea", "Sri Lanka", "St. Helena", "St. Kits-Nevis", "St. Lucia", "St. Vincent/Grenadines", "Sudan", "Suriname", "Svalbard Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokeelau", "Tonga", "Trinidad Tobago", "Tunisia", "Turquia", "Turkmenistan", "Turks Caicos Islands", "Tuvalu", "Uganda", "Ukrania", "United Arab Emirates", "Uruguay", "US Minor Outlying Is.", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands: British", "Virgin Islands: US", "Wallis Futuna Islands", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zaire", "Zambia", "Zimbabwe"];

                                            // Bucle for para generar opciones del menú desplegable
                                            for (var i = 0; i < paises.length; i++) {
                                            document.write('<option value="' + paises[i] + '">' + paises[i] + '</option>');
                                            }
                                          </script> 
                                        </Select><br><br>
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        
                    </div>
                    <!-- segunda fila -->
                    <div class="row mt-5">
                        <!-- Cuarta columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarPostal">
                                    <h5 class="card-title">Código postal</h5>
                                    <p class="card-text"><?php if ($ic['codigo_postal']=="") {
                                        echo "Sin codigo postal*";
                                    }else{echo $ic['codigo_postal'];}?></p>
                                    <a href="#" onclick="toggleElementos('MostrarPostal','EditPostal')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOContacto/ModificarPostal.php" method="post">
                                <div class="card-body" id="EditPostal" style="display: none;">
                                        <label for="postal"><h5>Código postal</h5></label>
                                        <input type="text" class="form-control" name="postal" id="postal" style="width: 190px;" value="<?php echo $ic['codigo_postal']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <!-- Primera columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarColonia" >
                                    <h5 class="card-title">Colonia</h5>
                                    <p class="card-text"><?php if($ic['colonia']==""){ echo "Sin colonia*";}else {
                                        echo $ic['colonia'];}
                                        ?></p>
                                    <a href="#" onclick="toggleElementos('MostrarColonia','EditColonia')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOContacto/ModificarColonia.php" method="post">
                                <div class="card-body" id="EditColonia" style="display: none;">
                                        <label for="colonia"><h5>Colonia</h5></label>
                                        <input type="text" class="form-control" name="colonia" id="colonia" style="width: 280px;" value="<?php echo $ic['colonia']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarCalle">
                                    <h5 class="card-title">Calle</h5>
                                    <p class="card-text"><?php if ($ic['calle']=="") {
                                        echo "Sin calle*";
                                    }else{ echo $ic['calle'];}?></p>
                                    <a href="#" onclick="toggleElementos('MostrarCalle','EditCalle')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOContacto/ModificarCalle.php" method="post">
                                <div class="card-body" id="EditCalle" style="display: none;">
                                        <label for="calle"><h5>Calle</h5></label>
                                        <input type="text" class="form-control" name="calle" id="calle" style="width: 280px;" value="<?php echo $ic['calle']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="row mt-5">
                        <div class="col-lg-5 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarReferencas">
                                    <h5 class="card-title">Referencas</h5>
                                    <p class="card-text"><?php if($ic['referencias']==""){echo "Sin Referencias*";}else{ echo $ic['referencias'];}?></p>
                                    <a href="#" onclick="toggleElementos('MostrarReferencas','EditReferencas')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOContacto/ModificarReferencias.php" method="post">
                                <div class="card-body" id="EditReferencas" style="display: none;">
                                        <label for="referencias"><h5>Referencas</h5></label>
                                        <textarea name="referencias" id="referencias" cols="35" rows="3"><?php echo $ic['referencias']?></textarea>
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            
            $si_tarjeta="SELECT * FROM public.informacion_financiera WHERE idcliente=$idCliente AND tipo='Tarjeta Debito'";
            $res_si_tarjeta=pg_query($conexion,$si_tarjeta);

                $no_tarjetas=pg_num_rows($res_si_tarjeta);

            $si_tarjetaC="SELECT * FROM public.informacion_financiera WHERE idcliente=$idCliente AND tipo='Tarjeta Credito'";
            $res_si_tarjetaC=pg_query($conexion,$si_tarjetaC);

                $no_tarjetasC=pg_num_rows($res_si_tarjetaC);
            ?>
            
            <div id="informacion-financiera" class="contenido" style="display: none;">
                <!-- Contenido de Información Financiera (oculto inicialmente) -->
                <div class="container">
                <h1>Información financiera</h1>
                <br>
                <h4>Mis tarjetas</h4>
                <h4>Debito</h4>
                <!-- Contenedor de tarjetas Deito-->
                <div id="miContenedor" style="width: 1000px; height: 360px; overflow-x: auto;">
                    <!-- Primera fila -->
                    <div id="renglon" class="renglon" style="display:flex; width:<?php echo ($no_tarjetas+1)*500?>px;">
                        <!-- Tarjetas existentes -->
                        <?php
                $tarjeta_electronica="SELECT idtarjeta, numero_tarjeta, nombre_propietario, vencimiento_mes, vencimiento_año, informacion_financiera.idcuenta
                FROM public.tarjeta_electronica 
                inner join public.informacion_financiera on public.tarjeta_electronica.idcuenta=public.informacion_financiera.idcuenta
                where informacion_financiera.idcliente=$idCliente and informacion_financiera.tipo='Tarjeta Debito'";
                $res_tarjeta=pg_query($conexion,$tarjeta_electronica);
                while ($if = pg_fetch_assoc($res_tarjeta)) {
                    ?>
                        <div class="tarjeta">
                            <div class="delante">
                                <div class="logo-tarjeta">
                                    <img src="../img/mastercard.png" alt="" >
                                </div>
                                <img src="../img/chip-tarjeta.png" alt="" class="chip">
                                        <p class="nombre">Numero de tarjeta</p>
                                        <p class="label"><?php $grupo=str_split($if['numero_tarjeta'],4); foreach ($grupo as $grupo){echo $grupo." ";} {
                                            # code...
                                        } ?></p>
                                    <div class="flex">
                                        <div class="nombre">
                                            <p class="nombre">Nombre del dueño</p>
                                            <p class="label"><?php echo $if['nombre_propietario'] ?></p>
                                        </div>
                                        <div class="expiracion">
                                            <p class="nombre">Expiracion</p>
                                            <p><span class="label"><?php echo $if['vencimiento_mes'] ?></span> / <span class="label"><?php echo $if['vencimiento_año'] ?></span></p>
                                        </div>
                                    </div>
                            </div>
                            <button onclick="btnAbrirModal2(this)" class="button_modal">
                                    <i class="bi bi-x" style="font-size: 40px;"></i>
                                    <label style="display: none;" id="no_cuenta" for="no_cuenta"><?php echo $if['idtarjeta'] ?></label>
                                </button>  
                                
                        </div>
                        <?php
                    }
                    
                        ?>
                        <dialog id="modal2" >
                            <form action="../php/CRUD_INFOFinanciera/EliminarTarjeta.php" method="post" style=" position:absolute; top:10px; left:30px;">
                                <input type="text" style="display: none;" class="form-control" name="label_no" id="label_no" value=""> 
                                <label for="" style="font-size: 30px;">Seguro de eliminar tarjeta</label><br><br><br>
                                <button class="btn btn-primary">Eliminar</button>
                            </form>
                                <button id="btnCerrarModal2" class="btn btn-primary" style="position: absolute; top:98px; left:320px;">Cancelar</button>
                            </dialog>
                    <!-- Crear tarjeta Debito-->
                        <div class="tarjeta-blanca">
                            <div style="position:relative;     z-index: 0;">
                                <button class="agregar" onclick="agregarT()">
                                    <i class="bi bi-plus-circle-dotted agrandar"></i>
                                </button>
                            </div>
                            <div class="new-tarjeta">
                                <div class="trasera">
                                    <div class="logo-tarjeta">
                                        <img src="../img/mastercard.png" alt="" >
                                    </div>
                                        <img src="../img/chip-tarjeta.png" alt="" class="chip">
                                        <form action="../php/CRUD_INFOFinanciera/RegistrarTarjeta.php" method="post">
                                            <label for="no-tarjeta" class="form-label">Numero de tarjeta</label>
                                            <input type="text" class="form-control" name="no-tarjeta" id="no-tarjeta"> 
                                            <div class="flex">
                                                <div class="nombre">
                                                    <label for="propietario" class="form-label">Nombre del propietario</label>
                                                    <input type="text" class="form-control" name="propietario" id="propietario">
                                                </div>
                                                <div class="expiracion">
                                                    <label for="expiracion" class="form-label">Expiracion</label>
                                                    <div style="display: flex;">
                                                        <label for="vencimiento_mes" class="form-label">Mes</label>
                                                        <input type="number" class="form-control" name="vencimiento_mes" id="vencimiento_mes" style="width: 60px;">
                                                        <label for="vencimiento_año" class="form-label">Año</label>
                                                        <input type="number" class="form-control" name="vencimiento_año" id="vencimiento_año" style="width: 60px;">
                                                    </div>
                                                </div>
                                            </div> 
                                            <button class="registrar-tarjeta" onclick="">
                                        <i class="bi bi-plus-circle-dotted" style="font-size: 40px;"></i>
                                    </button>     
                                        </form>
                                    
                                </div>
                                <div class="delante"><i class="bi bi-plus-circle-dotted agrandar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h4>Credito</h4>
                <!-- Contenedor de tarjetas Credito-->
                <div id="miContenedor" style="width: 1000px; height: 360px; overflow-x: auto;">
                    <!-- Primera fila -->
                    <div id="renglon" class="renglon" style="display:flex; width:<?php echo ($no_tarjetasC+1)*500?>px;">
                        <!-- Tarjetas existentes -->
                        <?php
                $tarjeta_electronicaC="SELECT idtarjeta, numero_tarjeta, nombre_propietario, vencimiento_mes, vencimiento_año, informacion_financiera.idcuenta
                FROM public.tarjeta_electronica 
                inner join public.informacion_financiera on public.tarjeta_electronica.idcuenta=public.informacion_financiera.idcuenta
                where informacion_financiera.idcliente=$idCliente and informacion_financiera.tipo='Tarjeta Credito'";
                $res_tarjetaC=pg_query($conexion,$tarjeta_electronicaC);
                while ($ifc = pg_fetch_assoc($res_tarjetaC)) {
                    ?>
                        <div class="tarjeta" style="background-color: rgb(181, 45, 0);">
                            <div class="delante">
                                <div class="logo-tarjeta">
                                    <img src="../img/mastercard.png" alt="" >
                                </div>
                                <img src="../img/chip-tarjeta.png" alt="" class="chip">
                                        <p class="nombre">Numero de tarjeta</p>
                                        <p class="label"><?php $grupo=str_split($ifc['numero_tarjeta'],4); foreach ($grupo as $grupo){echo $grupo." ";} {
                                            # code...
                                        } ?></p>
                                    <div class="flex">
                                        <div class="nombre">
                                            <p class="nombre">Nombre del dueño</p>
                                            <p class="label"><?php echo $ifc['nombre_propietario'] ?></p>
                                        </div>
                                        <div class="expiracion">
                                            <p class="nombre">Expiracion</p>
                                            <p><span class="label"><?php echo $ifc['vencimiento_mes'] ?></span> / <span class="label"><?php echo $ifc['vencimiento_año'] ?></span></p>
                                        </div>
                                    </div>
                            </div>
                            <button onclick="btnAbrirModal2(this)" class="button_modal">
                                    <i class="bi bi-x" style="font-size: 40px;"></i>
                                    <label style="display: none;" id="no_cuenta" for="no_cuenta"><?php echo $ifc['idtarjeta'] ?></label>
                                </button>  
                                
                        </div>
                        <?php
                    }
                    
                        ?>
                        <dialog id="modal2" >
                            <form action="../php/CRUD_INFOFinanciera/EliminarTarjeta.php" method="post" style=" position:absolute; top:10px; left:30px;">
                                <input type="text" style="display: none;" class="form-control" name="label_no" id="label_no" value=""> 
                                <label for="" style="font-size: 30px;">Seguro de eliminar tarjeta</label><br><br><br>
                                <button class="btn btn-primary">Eliminar</button>
                            </form>
                                <button id="btnCerrarModal2" class="btn btn-primary" style="position: absolute; top:98px; left:320px;">Cancelar</button>
                            </dialog>
                <!-- Crear tarjeta Credito-->
                <div class="tarjeta-blanca">
                            <div style="position:relative;     z-index: 0;">
                                <button class="agregarC" onclick="agregarTC()">
                                    <i class="bi bi-plus-circle-dotted agrandar"></i>
                                </button>
                            </div>
                            <div class="new-tarjetaC">
                                <div class="trasera">
                                    <div class="logo-tarjeta">
                                        <img src="../img/mastercard.png" alt="" >
                                    </div>
                                        <img src="../img/chip-tarjeta.png" alt="" class="chip">
                                        <form action="../php/CRUD_INFOFinanciera/RegistrarTarjetaC.php" method="post">
                                            <label for="no-tarjeta" class="form-label">Numero de tarjeta</label>
                                            <input type="text" class="form-control" name="no-tarjeta" id="no-tarjeta"> 
                                            <div class="flex">
                                                <div class="nombre">
                                                    <label for="propietario" class="form-label">Nombre del propietario</label>
                                                    <input type="text" class="form-control" name="propietario" id="propietario">
                                                </div>
                                                <div class="expiracion">
                                                    <label for="expiracion" class="form-label">Expiracion</label>
                                                    <div style="display: flex;">
                                                        <label for="vencimiento_mes" class="form-label">Mes</label>
                                                        <input type="number" class="form-control" name="vencimiento_mes" id="vencimiento_mes" style="width: 60px;">
                                                        <label for="vencimiento_año" class="form-label">Año</label>
                                                        <input type="number" class="form-control" name="vencimiento_año" id="vencimiento_año" style="width: 60px;">
                                                    </div>
                                                </div>
                                            </div> 
                                            <button class="registrar-tarjeta" onclick="">
                                        <i class="bi bi-plus-circle-dotted" style="font-size: 40px;"></i>
                                    </button>     
                                        </form>
                                    
                                </div>
                                <div class="delante"><i class="bi bi-plus-circle-dotted agrandar"></i></div>
                            </div>
                        </div>
                
                </div>
                
            </div>
                
            <br>
                <h4>Otras formas de pago</h4>
            </div>
            </div>
            <?php
             
            $info_personal="SELECT idcliente, nombre, apellidos, fecha_naciemiento, genero, foto, curp
            FROM public.informacion_personal WHERE idcliente=$idCliente";
            $res_personal=pg_query($conexion,$info_personal);
            
            while ($ip = pg_fetch_assoc($res_personal)) {  
            ?>
            <div id="informacion-personal" class="contenido" style="display: none;">
                <!-- Contenido de Información Personal (oculto inicialmente) -->
                <div class="container">
                <h1>Información personal</h1>
                
                    <!-- Primera fila -->
                    <div class="row mt-5">
                        <!-- Primera columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body"  id="MostrarNombre">
                                    <h5 class="card-title">Nombre</h5>
                                    <p class="card-text"><?php if ($ip['nombre']=="") {
                                                                    echo "Sin nombre*";
                                                                }else{
                                                                    echo $ip['nombre'];}
                                                          ?>
                                    </p>
                                    <a href="#informacion-personal" onclick="toggleElementos('MostrarNombre','EditNombre')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOPersonal/ModificarNombre.php" method="post">
                                <div class="card-body" id="EditNombre" style="display: none;">
                                        <label for="nombre"><h5>Referencas</h5></label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" style="width: 280px;" value="<?php echo $ip['nombre']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarApellido">
                                    <h5 class="card-title">Apellidos</h5>
                                    <p class="card-text"><?php if ($ip['apellidos']=="") {
                                                                    echo "Sin apellidos*";
                                                                }else{
                                                                    echo $ip['apellidos'];}
                                                          ?>
                                    </p>
                                    <a href="#" onclick="toggleElementos('MostrarApellido','EditApellido')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOPersonal/ModificarApellido.php" method="post">
                                <div class="card-body" id="EditApellido" style="display: none;">
                                        <label for="apellidos"><h5>Referencas</h5></label>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" style="width: 280px;" value="<?php echo $ip['apellidos']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        
                         
                        <!-- Sgundo renglon -->
                        <div class="row mt-3">
                            <!-- Tercera columna -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarNacimiento">
                                    <h5 class="card-title">Fecha de nacimiento</h5>
                                    <p class="card-text"><?php if ($ip['fecha_naciemiento']=="") {
                                                                    echo "Sin fecha de naciemiento*";
                                                                }else{
                                                                    echo $ip['fecha_naciemiento'];}
                                                          ?>
                                    </p>
                                    <a href="#" onclick="toggleElementos('MostrarNacimiento','EditNacimiento')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOPersonal/ModificarNacimiento.php" method="post">
                                <div class="card-body" id="EditNacimiento" style="display: none;">
                                        <label for="fecha_naciemiento"><h5>Referencas</h5></label>
                                        <input type="date" class="form-control" name="fecha_naciemiento" id="fecha_naciemiento" style="width: 280px;"  value="<?php echo $ip['fecha_naciemiento']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                            <!-- Cuarta columna -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarGenero">
                                    <h5 class="card-title">Genero</h5>
                                    <p class="card-text"><?php if ($ip['genero']=="") {
                                                                    echo "Sin genero*";
                                                                }else{
                                                                    echo $ip['genero'];}
                                                          ?>
                                    </p>
                                    <a href="#" onclick="toggleElementos('MostrarGenero','EditGenero')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOPersonal/ModificarGenero.php" method="post">
                                <div class="card-body" id="EditGenero" style="display: none;">
                                        <label for="genero"><h5>Genero</h5></label><br>
                                        <label for="masculino"><input type="radio" name="genero" id="masculino" value="Masculino">Masculino</label>
                                        <label for="femenino"><input type="radio" name="genero" id="femenino" value="Femenino">Femenino</label>
                                        <label for="otro"><input type="radio" name="genero" id="otro" value="Otro">Otro</label><br>
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="card shadow-lg">
                                <div class="card-body" id="MostrarCurp">
                                    <h5 class="card-title">Curp</h5>
                                    <p class="card-text"><?php if ($ip['curp']=="") {
                                                                    echo "Sin curp*";
                                                                }else{
                                                                    echo $ip['curp'];}
                                                          ?>
                                    </p>
                                    <a href="#" onclick="toggleElementos('MostrarCurp','EditCurp')" class="btn-sm btn-danger text-danger">Cambiar</a>
                                </div>
                                <form action="../php/CRUD_INFOPersonal/ModificarCurp.php" method="post">
                                <div class="card-body" id="EditCurp" style="display: none;">
                                        <label for="curp"><h5>Curp</h5></label>
                                        <input type="text" class="form-control" name="curp" id="curp" style="width: 100px;" value="<?php echo $ip['curp']?>">
                                        <button>Registrar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <?php
            }
            
            ?>
            <div id="configuraciones" class="contenido" style="display: none;">
                <!-- Contenido de Configuraciones (oculto inicialmente) -->
                <div class="container">
                <h1>Configuraciones</h1>
               
                    
                </div>
            </div>
        </main>
    </div>
    
    <!--div>
        <hr>
            </*?php
            if (isset($_GET['errorReg'])) {
                ?>
                <p class="error">
                    </*?php
                    echo $_GET['errorReg']
                    ?>
                </p>
            </*?php    
            } 
            ?>
            </*?php
            if (isset($_GET['bienReg'])) {
                ?>
                <p class="bien">
                    </*?php
                    echo $_GET['bienReg']
                    ?>
                </p>
            </*?php    
            } 
            ?>
        <hr>
    </div-->   
    
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
    <script src="../js/perfil-interaccion.js"></script>
    <script src="../js/carrito.js"></script>

</body>
</html>
