<?php
          session_start();
          
            if (isset($_SESSION['usuario'])==null || isset($_SESSION['usuario'])=='') {
                header("Location: iniciarSesion.php?errorIS=Inicie sesion para proceder con la compra");
                exit();
            }else{
                header("Location: pago.php");
                exit();
            }
?>