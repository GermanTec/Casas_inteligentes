<?php
    include('conexion.php');
    
    if (isset($_POST['id'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $id=validar($_POST['id']);
    
        if (empty($id)) {
        header("Location: admin.php?error=El ID es requerido");
        exit();
        }else{
        //Sentencia
        $query="DELETE FROM public.almacen
        WHERE idproducto=$id";
        $result2=pg_query($conexion,$query);
        
        $SQL="DELETE FROM public.productos
        WHERE idproducto=$id";
        $result=pg_query($conexion,$SQL);
        
        

        if ($result===1) {
            header("Location: admin.php?bien=Producto ELIMINADO incorrectamente");
        }else{
            header("Location: admin.php?bien=Producto ELIMINADO correctamente");
        }
        echo 'Hola';
    }
}

?>