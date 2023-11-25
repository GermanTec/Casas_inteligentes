<?php
    include('conexion.php');
    
    if (isset($_POST['productName']) 
    && isset($_POST['descripcion']) && isset($_POST['categoria']) 
    && isset($_POST['precio']) && isset($_POST['stock'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $productName=validar($_POST['productName']);
        $descripcion=validar($_POST['descripcion']);
        $categoria=validar($_POST['categoria']);
        $precio=validar($_POST['precio']);
        $stock=validar($_POST['stock']);
        $imagen=validar($_POST['imagen']);

        /*if ($_FILES["imagen"]["size"] > 0) {
            $imagen = file_get_contents($_FILES["imagen"]["tmp_name"]); // Lee el contenido del archivo de imagen
            //$nombre = pg_escape_string($_FILES["imagen"]["name"]); // Escapa el nombre del archivo para evitar inyección de SQL
            
            echo "Imagen cargada exitosamente.";
        } else {
            echo "No se seleccionó ninguna imagen.";
        } */       
    
        if (empty($productName)) {
        header("Location: admin.php?errorRP=El nombre es requerido");
        exit();
        }elseif(empty($descripcion)){
            header("Location: admin.php?errorRP=La descripcion es requerida");
            exit();
        }elseif(empty($categoria)){
            header("Location: admin.php?errorRP=La categoria es requerido");
            exit();
        }elseif(empty($precio)){
            header("Location: admin.php?errorRP=El precio es requerido");
            exit();
        }elseif(empty($stock)){
            header("Location: admin.php?errorRP=El stock es requerido");
            exit();
        }else{
        //Sentencia
        $SQL="INSERT INTO public.productos(nombre, descripcion, precio, idcategoria, imagen)
            VALUES ('$productName', '$descripcion', $precio, '$categoria', '$imagen')";
        $result=pg_query($conexion,$SQL);

        $query="INSERT INTO public.almacen(cantidadexistente, estado, idproducto)
            VALUES ($stock, 't', (select max(idproducto) from public.productos))";
        $result2=pg_query($conexion,$query);

        if ($result===1) {
            header("Location: admin.php?errorRP=Producto Registrado incorrectamente");
        }else{
            header("Location: admin.php?bienRP=Producto Registrado correctamente");
        }
    }
}

?>