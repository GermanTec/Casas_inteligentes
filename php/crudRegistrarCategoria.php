<?php
    include('conexion.php');
    
    if (isset($_POST['nombre']) 
    && isset($_POST['descripcion'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $nombre=validar($_POST['nombre']);
        $descripcion=validar($_POST['descripcion']);
    
        if (empty($nombre)) {
        header("Location: admin.php?errorCat=El nombre es requerido");
        exit();
        }elseif(empty($descripcion)){
            header("Location: admin.php?errorCat=La descripcion es requerida");
            exit();
        }else{
        //Sentencia
        $SQL="INSERT INTO public.categoria(nombre, descripcion)
            VALUES ( '$nombre', '$descripcion')";
        $result=pg_query($conexion,$SQL);

        if ($result===1) {
            header("Location: admin.php?errorCat=Categoria registrada INCORRECTAMENTE");
        }else{
            header("Location: admin.php?bienCat=Categoria registrada CORRECTAMENTE");
        }
    }
}

?>