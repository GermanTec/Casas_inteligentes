<?php
    $conexion=pg_connect("host= localhost dbname= HOMETECH
    user=postgres
    password=''
    port= 5432"   
    );
    session_start(); 
    if (isset($_POST['calle']) && isset($_SESSION['usuario']) != null || isset($_SESSION['usuario']) != '') {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nombre = $_SESSION['usuario'];
        $calle=validar($_POST['calle']);
        
    
        if(empty($calle)){
            header("Location: ../perfil.php?errorReg=El calle es requerido");
            exit();
        }else{
        //Sentencia
        $SQL="UPDATE public.informacion_contacto
                SET calle='$calle'
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