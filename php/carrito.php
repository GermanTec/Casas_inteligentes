<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $producto_array = $_POST['producto'];
    $precio = $_POST['precio_producto'];
    $cantidad = $_POST['cantidad'];
    $imagen=$_POST['imagen'];
    $desc=$_POST['desc'];
    $id_prod=$_POST['id_producto'];

    $id_prod = intval($id_prod);
    $cantidad = intval($cantidad);
    $precio = floatval($precio);
    // Crear el producto como un arreglo asociativo

    
    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
        $productoExistente = false;

        foreach ($carrito as &$producto) {
            if ($producto['id_producto'] == $id_prod) {
                echo "entro aqui";
                $producto['cantidad'] += $cantidad;
                $producto['precio_producto']+=$precio*$cantidad;
                
                $productoExistente = true;
                break;
            }
        }
            if (!$productoExistente) {
                // El producto no existe en el carrito, agregar nuevo producto
                $nuevoProducto = [
                    'producto' => $producto_array,
                    'precio_producto' => $precio,
                    'cantidad' => $cantidad,
                    'imagen' => $imagen,
                    'desc' => $desc,
                    'id_producto' => $id_prod
                ];
                $carrito[] = $nuevoProducto;
            }
    }else{
            echo "Producto nuvo";
            $nuevoProducto = [
                'producto' => $producto_array,
                'precio_producto' => $precio,
                'cantidad' => $cantidad,
                'imagen' => $imagen,
                'desc' => $desc,
                'id_producto' => $id_prod
            ];
            $carrito[] = $nuevoProducto;

    }
    
}
$_SESSION['carrito'] = $carrito;
echo "<pre>";
                print_r($_SESSION['carrito']);
                echo "</pre>";

header("Location: productos.php");
exit();
?>