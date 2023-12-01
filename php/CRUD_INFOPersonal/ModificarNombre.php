<?php
    $conexion=pg_connect("host= localhost dbname= HOMETECH
    user=postgres
    password=''
    port= 5432"   
    );
    session_start(); 
    if (isset($_POST['nombre']) && isset($_SESSION['usuario']) != null || isset($_SESSION['usuario']) != '') {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nombre = $_SESSION['usuario'];
        $nombreP=validar($_POST['nombre']);
        
    
        if(empty($nombreP)){
            header("Location: ../perfil.php?errorReg=El nombre es requerido");
            exit();
        }else{
        //Sentencia
        $SQL="UPDATE public.informacion_personal
                SET nombre='$nombreP'
                WHERE idcliente=(SELECT idcliente FROM public.cliente WHERE usuario='$nombre');";
        $result=pg_query($conexion,$SQL);

        if ($result===1) {
            header("Location: ../perfil.php?errorReg=Modificado incorrectamente");
        }else{
            echo '<script>window.location.href = "../perfil.php#informacion-personal";</script>';
        }

    }
}

?>