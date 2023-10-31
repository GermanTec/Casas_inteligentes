<?php
$conexion=pg_connect("host= localhost dbname= HOMETECH
                    user=postgres
                    password=''
                    port= 5432"   
                );
 
/*
if($conexion){
    echo"Se realizo de manera correcta";
}else{
    echo"Error al conectar";
}

$query="SELECT * FROM public.cliente where usuario='{German}' and contraseña='{12345}'";
$consulta=pg_query($conexion,$query);

if($consulta){
    if(pg_num_rows($consulta)>0){
    echo "<p>LISTADO DE MARCAS TURISTICAS<br>";
    echo "---------------------------------</p>";
    while ($obj=pg_fetch_object($consulta)) {
        echo $obj->nombre."<br>";
    }
}
}*/

?>

