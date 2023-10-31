<?php
    session_start();
    include('conexion.php');

    if (isset($_POST['usuario'])&& isset($_POST['contraseña'])) {
        function validar($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $usuario=validar($_POST['usuario']);
        $contraseña=validar($_POST['contraseña']);
        
        if (empty($usuario)) {
            header("Location: clientes.php?error=El usuario es requerido");
            exit();
        }elseif(empty($contraseña)){
            header("Location: clientes.php?error=La contraseña es requerida");
            exit();
        }else{
            //$contraseña=md5($contraseña);
            $SQL="SELECT * FROM public.cliente where usuario='{$usuario}' and contraseña='{$contraseña}'";
            $result=pg_query($conexion,$SQL);

            $query="SELECT * FROM public.administrador where usuario='{$usuario}' and contraseña='{$contraseña}'";
            $result2=pg_query($conexion,$query);

            if (pg_num_rows($result)===1) {
                $row=pg_fetch_assoc($result);
                
                if ($row['usuario']===$usuario && $row['contraseña']===$contraseña) {
                    $_SESSION['usuario']=$row['usuario'];
                    $_SESSION['nombre']=$row['nombre'];
                    $_SESSION['idcliente']=$row['idcliente'];
                    
                    header("Location: inicio.php");
                    exit();
                }else{
                    header("Location: clientes.php?errorIS=ERROR Usuario y contraseña incorrectas");
                    exit();
                }
                
            }else if (pg_num_rows($result2)===1) {
                $row=pg_fetch_assoc($result2);
                
                if ($row['usuario']===$usuario && $row['contraseña']===$contraseña) {
                    $_SESSION['usuario']=$row['usuario'];
                    $_SESSION['nombre']=$row['nombre'];
                    $_SESSION['idadmin']=$row['idadmin'];
                    $nombre=$row['nombre'];
                    header("Location: admin.php?inicio=$nombre");
                    exit();
                }else{
                    header("Location: clientes.php?errorIS=ERROR Usuario y contraseña incorrectas");
                    exit();
                }
                
            }else{
                header("Location: clientes.php?errorIS=ERROR Usuario y contraseña incorrectas");
                    exit();
            }
        }
    }else{
        header("Location: clientes.php?error=ERROR Usuario y contraseña incorrectas");
                    exit();
    }
?>