<?php
    $conexion=pg_connect("host= localhost dbname= HOMETECH
    user=postgres
    password=''
    port= 5432"   
    );
    session_start(); 
    if (isset($_POST['label_no']) && isset($_SESSION['usuario']) != null || isset($_SESSION['usuario']) != '') {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nombre = $_SESSION['usuario'];
        $id_tarjeta=validar($_POST['label_no']);
    
        if(empty($id_tarjeta)){
            echo ($id_tarjeta);
        }else{
        //Sentencia
        $buscar_cuenta="SELECT idcuenta FROM public.tarjeta_electronica WHERE idtarjeta=$id_tarjeta;";
        $res2=pg_query($conexion,$buscar_cuenta);
        $id =pg_fetch_result($res2,0,'idcuenta');

        $tarjeta="DELETE FROM public.tarjeta_electronica WHERE idtarjeta=$id_tarjeta;";
        $res=pg_query($conexion,$tarjeta);

        $cuenta="DELETE FROM public.informacion_financiera WHERE idcuenta=$id;";
        $res3=pg_query($conexion,$cuenta);

        if ($res===1 && $res3===1) {
            echo "fracas";
            header("Location: ../perfil.php?errorReg=Elimino incorrectamente");
        }else{
            echo "exito";
            header("Location: ../perfil.php?");
        }
    }
}

?>