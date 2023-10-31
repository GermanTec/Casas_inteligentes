<?php
    include('conexion.php');
    
    if (isset($_POST['id']) && isset($_POST['productName'])
    && isset($_POST['descripcion']) && isset($_POST['categoria']) 
    && isset($_POST['precio']) && isset($_POST['stock'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $id=validar($_POST['id']);
        $productName=validar($_POST['productName']);
        $descripcion=validar($_POST['descripcion']);
        $categoria=validar($_POST['categoria']);
        $precio=validar($_POST['precio']);
        $stock=validar($_POST['stock']);
    
        if (empty($id)) {
        header("Location: admin.php?errorMP=El ID es requerido");
        exit();
        }else{
        //Sentencia
        $SQL="UPDATE public.productos
        SET nombre='$productName', descripcion='$descripcion', precio=$precio, idcategoria=1
        WHERE idproducto=$id";        
        $result=pg_query($conexion,$SQL);


        if ($result===1) {
            header("Location: admin.php?errorMP=Producto modificado incorrectamente");
        }else{
            header("Location: admin.php?bienMP=Producto modificado correctamente");
        }
    }
}

?>