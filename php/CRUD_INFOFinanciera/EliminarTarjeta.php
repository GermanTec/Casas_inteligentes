<?php
    $conexion=pg_connect("host= localhost dbname= HOMETECH
    user=postgres
    password=''
    port= 5432"   
    );
    session_start(); 
    if (isset($_POST['propietario']) && isset($_POST['vencimiento_año']) && isset($_POST['vencimiento_mes']) 
    && isset($_POST['no-tarjeta']) && isset($_SESSION['usuario']) != null || isset($_SESSION['usuario']) != '') {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nombre = $_SESSION['usuario'];
        $propietario=validar($_POST['propietario']);
        $vencimiento_año=validar($_POST['vencimiento_año']);
        $vencimiento_mes=validar($_POST['vencimiento_mes']);
        $no_tarjeta=validar($_POST['no-tarjeta']);
    
        if(empty($nombre)){
            
        }else{
        //Sentencia
        $SQL="INSERT INTO public.informacion_financiera(idcliente, tipo)VALUES ((SELECT idcliente FROM public.cliente WHERE usuario='$nombre'), 'Tarjeta Debito');";
        $result=pg_query($conexion,$SQL);

        $tarjeta="SELECT MAX(idcuenta) FROM public.informacion_financiera";
        $res=pg_query($conexion,$tarjeta);
        $id =pg_fetch_result($res,0);

        $SQL2="INSERT INTO public.tarjeta_electronica(numero_tarjeta, nombre_propietario, vencimiento_mes, vencimiento_año, idcuenta)
            VALUES ($no_tarjeta,'$propietario', $vencimiento_mes, $vencimiento_año, $id);";
        $result2=pg_query($conexion,$SQL2);

        if ($result2===1 && $result===1) {
            echo "fracas";
            header("Location: ../perfil.php?errorReg=Registro echo incorrectamente");
        }else{
            echo "exito";
            header("Location: ../perfil.php?");
        }

    }
}

?>