<?php
session_start();
include('conexion.php');
    
if (isset($_SESSION['usuario'])==null || isset($_SESSION['usuario'])=='' && $_SESSION['carrito']) {
    echo "No ay usuario ni carrito agregado";
}else{
    $nombre=$_SESSION['usuario'];

        $consultar="SELECT idcliente FROM public.cliente WHERE usuario='$nombre'";
        $respuesta=pg_query($conexion,$consultar);
        
        if($fila=pg_fetch_assoc($respuesta)){
            $idCliente=$fila['idcliente'];
        }else{
            
            echo "No se encontraron resultados";
            
        }

    for ($i=0; $i < count($_SESSION['carrito']); $i++) { 
        
        $producto_array = $_SESSION['carrito'][$i]['producto'];
        $precio = $_SESSION['carrito'][$i]['precio_producto'];
        $cantidad = $_SESSION['carrito'][$i]['cantidad'];
        $desc= $_SESSION['carrito'][$i]['desc'];
        $id_prod= $_SESSION['carrito'][$i]['id_producto'];

        $id_prod = intval($id_prod);
        $cantidad = intval($cantidad);
        $precio = floatval($precio);
        
        $SQL="INSERT INTO public.ventas( fecha, cantidad, total, idproducto, idcliente)
        VALUES (NOW(), $cantidad, $precio, $id_prod, $idCliente);";
        $result=pg_query($conexion,$SQL);

        $consultarAlmacen="SELECT cantidadexistente FROM public.almacen WHERE idproducto=$id_prod;";
        $buscar=pg_query($conexion,$consultarAlmacen);
        
        $almacen=pg_fetch_result($buscar,0);
        if ($almacen==0) {
            $query="UPDATE public.almacen SET cantidadexistente=$final, estado=false;
                WHERE idproducto=$id_prod;";
            $result2=pg_query($conexion,$query);
        }else{
        $final=$almacen-$cantidad;
    
        $query="UPDATE public.almacen SET cantidadexistente=$final
                WHERE idproducto=$id_prod;";
        $result2=pg_query($conexion,$query);

        if ($result===1) {
            header("Location: pago.php?");
        }else{
            $_SESSION['carrito'] = array(); 
            header("Location: productos.php");
        }
    }
    }
    echo "<pre>";
                    print_r($_SESSION['carrito']);
                    echo "</pre>";
}

//header("Location: productos.php")
?>