<?php
    include('conexion.php');

    if (isset($_POST['usuario'])&& isset($_POST['contraseña']) && isset($_POST['nombre'])
    && isset($_POST['apellidos']) && isset($_POST['cp']) && isset($_POST['telefono']) && isset($_POST['correo'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $usuario=validar($_POST['usuario']);
        $contraseña=validar($_POST['contraseña']);
        $nombre=validar($_POST['nombre']);
        $apellidos=validar($_POST['apellidos']);
        $cp=validar($_POST['cp']);
        $telefono=validar($_POST['telefono']);
        $correo=validar($_POST['correo']);
        
    
        if (empty($usuario)) {
        header("Location: registrarCliente.php?errorReg=El usuario es requerido");
        exit();
        }elseif(empty($contraseña)){
            header("Location: registrarCliente.php?errorReg=La contraseña es requerida");
            exit();
        }elseif(empty($nombre)){
            header("Location: registrarCliente.php?errorReg=El nombre es requerido");
            exit();
        }elseif(empty($apellidos)){
            header("Location: registrarCliente.php?errorReg=El apellido es requerido");
            exit();
        }elseif(empty($cp)){
            header("Location: registrarCliente.php?errorReg=El codigo postal es requerido");
            exit();
        }elseif(empty($telefono)){
            header("Location: registrarCliente.php?errorReg=El telefono es requerido");
            exit();
        }elseif(empty($correo)){
            header("Location: registrarCliente.php?errorReg=El correo es requerido");
            exit();
        }else{
        //Sentencia
        $SQL="INSERT INTO public.cliente(usuario, contraseña) VALUES ( '$usuario', '$contraseña');";
        $result=pg_query($conexion,$SQL);

        $SQL2="SELECT MAX(idcliente) FROM public.cliente";
        $result2=pg_query($conexion,$SQL2);
        $id =pg_fetch_result($result2,0);

        $SQL3="INSERT INTO public.informacion_contacto(telefono, correo_electronico, codigo_postal, idcliente) 
                VALUES ('$telefono', '$correo', '$cp', '$id');
               INSERT INTO public.informacion_personal(idcliente, nombre, apellidos)
	            VALUES ('$id', '$nombre', '$apellidos');";
        $result3=pg_query($conexion,$SQL3);

        if ($result3===1 && $result===1) {
            header("Location: registrarCliente.php?errorReg=Usuario Registrado incorrectamente");
        }else{
            header("Location: iniciarSesion.php?");
        }

    }
}

?>