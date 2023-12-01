<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administracion de la Pagina</title>
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
              
                  <li><a href="iniciarSesion.php">Login</a><i class="bi bi-person gap-3"></i></li>
                
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
      <ul>
      <div class="logo"></div>
      <div class="logo"></div>
      <div class="logo"></div>
      <div class="logo"></div>
      <div class="logo">Administracion</div>
      </ul>
     </nav>
     <!-- Fin Navegador--> 
     <h1 style="text-align: center;">Bienvenido a la pagina de Administracion</h1>
     <h3 style="padding: 30px; font-size:large; color:#979797">En la página de administración de productos del sitio web usa una interfaz 
      diseñada para que el administrador o los usuarios autorizados gestionen eficientemente 
      la información relacionada con los productos que ofrece la plataforma tanto como las categorias
      que se tienen.</h3>
    

     <div class="container">
    <!-- Buscador de productos por nombre o categoría -->
    <?php $nombreCat=""?>
    <form action="search.php" method="post">
    <div class="search-box col-lg-12">
      <h2>Buscar</h2>
      <input type="text" class="form-control" id="searchProduct" name="searchProduct" onkeyup=""
        placeholder="Nombre de la Categoría">
        <?php if(isset($_GET['nombre'])){
          $nombreCat=$_GET['nombre'];
        }?>
    </div>
    </form>
  </div>

  <!-- Formulario para agregar categoria -->
  <div class="row flex-lg-row-reverse">

    <div class="col-lg-5">
      <h2>Categorias</h2>
      <div class="seleccion">
      <ul>
        <li><a href="javascript:void(0)" onclick="mostrarCategoriaA()">Agregar</a></li>
        <li><a href="javascript:void(0)" onclick="mostrarCategoriaM()">Modificar</a></li>
        <li><a href="javascript:void(0)" onclick="mostrarCategoriaE()">Eliminar</a></li>
      </ul>
      </div><br>

      <form id="productFormCA" action="crudRegistrarCategoria.php" method="post">
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
      

      <form id="productFormCM" action="crudModificarCategoria.php" method="post" style="display: none;">
        <div class="row">

          <div class="mb-3 col-lg-5">
              <label for="idCategoria" class="form-label">ID Categoria</label>
              <input type="text" class="form-control" name="idCategoria" id="idCategoria">
          </div>
          
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
                    if (isset($_GET['errorMCat'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['errorMCat']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <?php
                    if (isset($_GET['bienMCat'])) {
                        ?>
                        <p class="bien">
                            <?php
                            echo $_GET['bienMCat']
                            ?>
                        </p>
                    <?php    
                    } 
                    ?>
                    <hr>
            <button type="submit" class="btn btn-primary" id="addUpdateButton">Modificar Categoria</button>
              

          </div>
        </div>
      </form>

      <form id="productFormCE" action="crudEliminarCategoria.php" method="post" style="display: none;">
        <div class="row">
          
          <div class="mb-3 col-lg-5">
            <label for="idCategoria" class="form-label">ID Categoria</label>
            <input type="text" class="form-control" name="idCategoria" id="idCategoria">
          </div>
        </div>
        <br><br><br><br>

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
            <button type="submit" class="btn btn-primary" id="addUpdateButton">Eliminar Categoria</button>
              

          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-7">
      <!-- Lista de categorias disponibles -->
      <div class="product-list">
        <h2>Categoria Disponibles</h2>
        <table class="table table-bordered" id="table2">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
            <?php
            include('conexion.php');
            $query="SELECT * FROM public.categoria WHERE nombre LIKE '%$nombreCat%'";
            $result=pg_query($conexion,$query);
            while ($m =pg_fetch_array($result)) {            
            ?>
            <tr>
              <th><?php echo $m['idcategoria'] ?></th>
              <th><?php echo $m['nombre'] ?></th>
              <th><?php echo $m['descripcion'] ?></th>
              <th>
                    <button type="submit" class="btn btn-primary" id="addUpdateButton" onclick="click4(event)">Modificar</button>
                    <button type="submit" class="btn btn-primary" id="eliminar" onclick="click5(event)">Eliminar</button>  
              </th>
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
    <?php $nombreProd=""; $nombreCatP="";?>
    <form action="search.php" method="post">
    <div class="search-box col-lg-12">
      <h2>Buscar</h2>
      <input type="text" class="form-control" id="searchProduct2" name="searchProduct2" onkeyup=""
        placeholder="Nombre de la Categoría O Nombre del Producto">
        <?php if(isset($_GET['nombre2'])){
          $nombreCatP=$_GET['nombre2'];
          $nombreProd=$_GET['nombre2'];
        }?>
    </div>
    </form>
  </div>

  <!-- Formulario para agregar o actualizar productos -->
  <div class="row flex-lg-row-reverse" >
    
    <div class="col-lg-5">
      <h2>Administrar Productos</h2>
      
      <div class="seleccion">
      <ul>
        <li><a href="javascript:void(0)" onclick="mostrarA()">Agregar</a></li>
        <li><a href="javascript:void(0)" onclick="mostrarM()">Modificar</a></li>
        <li><a href="javascript:void(0)" onclick="mostrarE()">Eliminar</a></li>
      </ul>
      </div>
      <!--Inicia formulario para agregar productos-->
      <form id="productForm3" action="crudRegistrarProducto.php" method="post">
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
          <div class="mb-4 col-lg-3">
            <label for="productCategory" class="form-label">Categoría</label>
            <select name="categoria" id="productCategory" style="font-size: 30px";>
            <?php
            include('conexion.php');
            $query="SELECT idcategoria,nombre FROM public.categoria";
            $result=pg_query($conexion,$query);
            while ($m =pg_fetch_array($result)) {
            ?>
            <option value="<?php echo $m['idcategoria'] ?>"><?php echo $m['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            
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
      <form id="productForm2" action="crudModificarProducto.php" method="post" style="display: none;">

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
          <div class="mb-3 col-lg-3">
            <label for="productCategory" class="form-label">Categoría</label>
            <select name="categoria" id="productCategory" style="font-size: 30px";>
            <?php
            include('conexion.php');
            $query="SELECT idcategoria,nombre FROM public.categoria";
            $result=pg_query($conexion,$query);
            while ($m =pg_fetch_array($result)) {
            ?>
            <option value="<?php echo $m['idcategoria'] ?>"><?php echo $m['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
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
      <form id="productForm" action="crudEliminarProducto.php" method="deleted" style="display: none;">
      <div class="row">

          <div class="mb-3 col-lg-5">
              <label for="productId" class="form-label">ID del Producto</label>
              <input type="text" class="form-control" name="id" id="productId">
            </div>
          
        </div><br><br><br><br><br><br><br><br><br><br>

        
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
            inner join public.categoria on public.productos.idcategoria=public.categoria.idcategoria 
            WHERE productos.nombre LIKE '%$nombreProd%' OR categoria.nombre LIKE '%$nombreCatP%'";
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
                  <td style="display: none;"><?php echo $m['imagen'] ?></td>
                  <td>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;" id="addUpdateButton" onclick="click2(event)">Modificar</button>
                    <button type="submit" class="btn btn-primary" id="eliminar" onclick="click3(event)">Eliminar</button>  
                  </td>
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