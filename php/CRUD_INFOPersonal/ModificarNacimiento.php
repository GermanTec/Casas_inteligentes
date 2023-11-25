<?php
    $conexion=pg_connect("host= localhost dbname= HOMETECH
    user=postgres
    password=''
    port= 5432"   
    );
    session_start(); 
    if (isset($_POST['fecha_naciemiento']) && isset($_SESSION['usuario']) != null || isset($_SESSION['usuario']) != '') {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nombre = $_SESSION['usuario'];
        $fecha_naciemiento=validar($_POST['fecha_naciemiento']);
        
    
        if(empty($fecha_naciemiento)){
            header("Location: ../perfil.php?errorReg=El fecha_naciemiento es requerido");
            exit();
        }else{
        //Sentencia
        $SQL="UPDATE public.informacion_personal
                SET fecha_naciemiento='$fecha_naciemiento'
                WHERE idcliente=(SELECT idcliente FROM public.cliente WHERE usuario='$nombre');";
        $result=pg_query($conexion,$SQL);

        if ($result===1) {
            echo "fracas";
            header("Location: ../perfil.php?errorReg=Modificado incorrectamente");
        }else{
            echo "exito";
            header("Location: ../perfil.php?");
        }

    }
}

?>