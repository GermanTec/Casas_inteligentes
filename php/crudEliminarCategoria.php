<?php
    include('conexion.php');
    
    if (isset($_POST['idCategoria'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $idCat=validar($_POST['idCategoria']);
    
        if (empty($idCat)) {
        header("Location: admin.php?errorCat=El id de la categoria es requerido");
        exit();
        }else{
        //Sentencia
        $SQL="DELETE FROM public.categoria WHERE idcategoria=$idCat;";
        $result=pg_query($conexion,$SQL);

        if ($result===1) {
            header("Location: admin.php?errorCat=Categoria Eliminada INCORRECTAMENTE");
        }else{
            header("Location: admin.php?bienCat=Categoria Eliminada CORRECTAMENTE");
        }
    }
}

?>