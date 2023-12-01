<?php
session_start();

if (isset($_POST['eliminar_producto'])) {
    $idProductoEliminar = $_POST['id_producto'];
    echo "<pre>";
                print_r($_SESSION['carrito']);
                echo "</pre>";

echo $idProductoEliminar;
    // Obtener el índice del producto en el carrito
    $indiceProducto = array_search($idProductoEliminar, array_column($_SESSION['carrito'], 'id_producto'));

    echo $indiceProducto;

    // Si se encuentra el producto, eliminarlo del carrito
    if ($indiceProducto !== false) {
        unset($_SESSION['carrito'][$indiceProducto]);
    }
}

$carrito = $_SESSION['carrito'];

$_SESSION['carrito'] = array_values($carrito);
// Redirigir de nuevo al carrito o a donde sea necesario
header('Location: productos.php');
echo "<pre>";
                print_r($_SESSION['carrito']);
                echo "</pre>";
exit();
?>