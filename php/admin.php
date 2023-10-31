<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacén de Productos Tecnológicos</title>
  <link rel="stylesheet" href="../css/styles_Admin.css">
  <link rel="stylesheet" href="../css/nav-enca-pie.css">
  <link rel="stylesheet" href="../css/footer.css">

  <!-- Enlace a los archivos CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--Para pie de pagina-->
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  
  <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- Encabezado-->
    <header class="header">
        <div class="container">
          <ul class="detalles ">
            <li><a href="#">Contactos</a></li>
            <?php
              session_start();
              
                if (isset($_SESSION['nombre'])==null || isset($_SESSION['nombre'])=='') {
              ?>
              
                  <li><a href="clientes.php">Login</a><i class="bi bi-person gap-3"></i></li>
                
              <?php    
                }else{
                  $nombre=$_SESSION['nombre'];
                  ?>
                  <li style="width: 150px;"><a href="#" onclick="cortador()">
                  <?php
                  echo $nombre;
                  ?>
                  </a><i class="bi bi-person gap-3"> </i>
                  <div class="perfil">
                        <ul id="extend">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="cerrarSesion2.php">Cerrar sesion</a></li>
                        
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
      <div class="logo">Administracion</div>
       <ul>
         <li><a ></a></li>
       </ul>
     </nav>
     <!-- Fin Navegador--> 
    <br>
     <div class="container">
    <!-- Buscador de productos por nombre o categoría -->
    <form action="clientes.php">
    <div class="search-box col-lg-12">
      <h2>Buscar</h2>
      <input type="text" class="form-control" id="searchProduct" onkeyup="searchProduct(this.value)"
        placeholder="Categoría">
    </div>
    </form>
  </div>

  <!-- Formulario para agregar categoria -->
  <div class="row flex-lg-row-reverse">

    <div class="col-lg-5">
      <h2>Categorias</h2>

      <form id="productFormC" action="registrarCategoria.php" method="post">
        <div class="row">
          
          <div class="mb-3 col-lg-5">
            <label for="productName" class="form-label">Nombre de la Categoria</label>
            <input type="text" class="form-control" name="nombre" id="productName">
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-lg-5">
            <label for="productDescription" class="form-label">Descripción</label>
            <textarea class="form-control" id="productDescription" name="descripcion"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
          <hr>
                    <?php
                    if (isset($_GET['errorCat'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['errorCat']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bienCat'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bienCat']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>
            <button type="submit" class="btn btn-primary" id="addUpdateButton">Agregar Categoria</button>
              

          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-7">
      <!-- Lista de categorias disponibles -->
      <div class="product-list">
        <h2>Categoria Disponibles</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripción</th>
            </tr>
            <?php
            include('conexion.php');
            $query="SELECT * FROM public.categoria";
            $result=pg_query($conexion,$query);
            while ($m =pg_fetch_array($result)) {            
            ?>
            <tr>
              <th><?php echo $m['idcategoria'] ?></th>
              <th><?php echo $m['nombre'] ?></th>
              <th><?php echo $m['descripcion'] ?></th>
              
            </tr>
            <?php
            }
            ?>
          </thead>
          
        </table>
      </div>
    </div>
  </div>

   <div class="container" id="ventanaAdmin">
    <!-- Buscador de productos por nombre o categoría -->
    <form action="clientes.php">
    <div class="search-box col-lg-12">
      <h2>Buscar</h2>
      <input type="text" class="form-control" id="searchProduct"
        placeholder="Nombre o Categoría">
    </div>
    </form>
  </div>

  <!-- Formulario para agregar o actualizar productos -->
  <div class="row flex-lg-row-reverse" >
    
    <div class="col-lg-5">
      <h2>Administrar Productos</h2>
      
      <div class="seleccion">
      <ul>
        <li><a href="#ventanaAdmin" onclick="mostrarA()">Agregar</a></li>
        <li><a href="#ventanaAdmin" onclick="mostrarM()">Modificar</a></li>
        <li><a href="#ventanaAdmin" onclick="mostrarE()">Eliminar</a></li>
      </ul>
      </div>
      <!--Inicia formulario para agregar productos-->
      <form id="productForm3" action="registrarProducto.php" method="post">
        <div class="row">
          
          <div class="mb-3 col-lg-5">
            <label for="productName" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" name="productName" id="productName">
          </div>
          <div class="mb-3 col-lg-5">
            <label for="productImage">URL Imagen del Producto:</label>
            <input type="text" id="imagen" name="imagen">
          </div>
        </div>

        <div class="row">
          
          <div class="mb-3 col-lg-5">
            <label for="productDescription" class="form-label">Descripción</label>
            <textarea class="form-control" id="productDescription" name="descripcion"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-lg-2">
            <label for="productCategory" class="form-label">Categoría</label>
            <input type="number" class="form-control" name="categoria" id="productCategory">
          </div>
          <div class="mb-3 col-lg-4">
            <label for="productPrice" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" id="productPrice" step="0.01" >
          </div>
          <div class="mb-3 col-lg-2">
            <label for="productStock" class="form-label">Existencias</label>
            <input type="number" class="form-control" name="stock" id="productStock" >
          </div>

        </div>

        <div class="row">
          <div class="mb-3">
          <hr>
                    <?php
                    if (isset($_GET['errorRP'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['errorRP']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bienRP'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bienRP']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>
            <button type="submit" class="btn btn-primary" id="addUpdateButton">Agregar Producto</button>
  
              <br><br>

          </div>
        </div>
      </form>
      <!--Termina formulario para agregar productos-->
      

      <!--Inicia formulario para modificar productos-->
      <form id="productForm2" action="modificarProducto.php" method="post" style="display: none;">

      <div class="row">

          <div class="mb-3 col-lg-5">
              <label for="productId" class="form-label">ID del Producto</label>
              <input type="text" class="form-control" name="id" id="productId">
            </div>
          
          <div class="mb-3 col-lg-5">
            <label for="productName" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" name="productName" id="productName">
          </div>
        </div>

        <div class="row">
        <div class="mb-3 col-lg-5">
            <label for="productDescription" class="form-label">Descripción</label>
            <textarea class="form-control" id="productDescription" name="descripcion"></textarea>
          </div>

          <div class="mb-3 col-lg-5">
            <label for="productImage">Imagen del Producto:</label>
            <input type="text" id="imagen" name="imagen">
          </div>
          
        </div>

        <div class="row">
          <div class="mb-3 col-lg-2">
            <label for="productCategory" class="form-label">Categoría</label>
            <input type="text" class="form-control" name="categoria" id="productCategory">
          </div>
          <div class="mb-3 col-lg-4">
            <label for="productPrice" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="productPrice">
          </div>
          <div class="mb-3 col-lg-2">
            <label for="productStock" class="form-label">Existencias</label> 
            <input type="number" class="form-control" name="stock" id="productStock">
          </div>

        </div>
        <div class="row">
          <div class="mb-3">
        <hr>
                    <?php
                    if (isset($_GET['errorMP'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['errorMP']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bienMP'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bienMP']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>
              <button type="submit" class="btn btn-primary" id="addUpdateButton">Modificar Producto</button>
              <br><br>
              </div>
        </div>
      </form>
      <!--Termina formulario para modificar productos-->
      
      <!--Inicia formulario para Eliminar productos-->
      <form id="productForm" action="eliminarProducto.php" method="deleted" style="display: none;">
      <div class="row">

          <div class="mb-3 col-lg-5">
              <label for="productId" class="form-label">ID del Producto</label>
              <input type="text" class="form-control" name="id" id="productId">
            </div>
          
        </div>

        
        <hr>
                    <?php
                    if (isset($_GET['error'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['error']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bien'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bien']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>      
      <button type="submit" class="btn btn-primary" id="addUpdateButton">Eliminar
              Producto</button>
             
      </form>
      <!--Termina formulario para eliminar productos-->
    </div>

    <div class="col-lg-7">
      <!-- Cargar Lista de productos disponibles -->
      <div class="product-list">
        <h2>Productos Disponibles</h2>
        <table class="table table-bordered" id="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre Producto</th>
              <th>Imagen</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Categoría</th>
              <th>Existencias</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include('conexion.php');
            $query="SELECT productos.idproducto, productos.nombre as producto, imagen, productos.descripcion, precio, categoria.nombre,categoria.idcategoria,cantidadexistente FROM public.productos 
            inner join public.almacen on public.almacen.idproducto=public.productos.idproducto
            inner join public.categoria on public.productos.idcategoria=public.categoria.idcategoria";
            $result=pg_query($conexion,$query);
            
              while ($m =pg_fetch_array($result)) {            
                ?>
                <tr>
                  <td><?php echo $m['idproducto'] ?></td>
                  <td><?php echo $m['producto'] ?></td>
                  <td><img src="<?php echo $m['imagen'] ?>" alt="" width="60"></td>
                  <td><?php echo $m['descripcion'] ?></td>
                  <td><?php echo $m['precio'] ?></td>
                  <td><?php echo $m['nombre'] ?></td>
                  <td><?php echo $m['cantidadexistente'] ?></td>
                  <td><button type="submit" class="btn btn-primary" id="addUpdateButton">Modificar</button></td>
                </tr>
                <?php
                }
           
            ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  

<!--Pie de pagina-->
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
<!-- Fin Pie de pagina-->

  <!--<script src="/Casa Inteligente9/js/script_Admin.js"></script>-->
  <script src="../js/inicio.js"></script>
  <script src="../js/admin.js"></script>
</body>
</html>