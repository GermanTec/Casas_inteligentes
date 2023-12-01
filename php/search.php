<?php if(isset($_POST['searchProduct'])){
    $nombreCat=$_POST['searchProduct'];
    header("Location: admin.php?nombre=$nombreCat");

    }else{
        if(isset($_POST['searchProduct2'])){
            $nombreCat=$_POST['searchProduct2'];
            header("Location: admin.php?nombre2=$nombreCat#ventanaAdmin");
            
            }else{
                header("Location: admin.php");
                
        }
    }

    if(isset($_POST['searchProduct3'])){
        $nombreCat=$_POST['searchProduct3'];
        header("Location: productos.php?nombre3=$nombreCat#product");
        
        }else{
            header("Location: productos.php");
            
    }

?>

    