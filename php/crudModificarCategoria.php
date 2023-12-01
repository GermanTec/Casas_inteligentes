<?php
    include('conexion.php');
    
    if (isset($_POST['nombre']) && isset($_POST['idCategoria'])
    && isset($_POST['descripcion'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $idCat=validar($_POST['idCategoria']);
        $nombre=validar($_POST['nombre']);
        $descripcion=validar($_POST['descripcion']);
    
        if (empty($idCat)) {
        header("Location: admin.php?errorMCat=El id de la categoria es requerido");
        exit();
        }else{
        //Sentencia
        $SQL="UPDATE public.categoria SET nombre='$nombre', descripcion='$descripcion'
                WHERE idcategoria=$idCat;";
        $result=pg_query($conexion,$SQL);

        if ($result===1) {
            header("Location: admin.php?errorMCat=Categoria Modificada INCORRECTAMENTE");
        }else{
            header("Location: admin.php?bienMCat=Categoria Modificada CORRECTAMENTE");
        }
    }
}

?>