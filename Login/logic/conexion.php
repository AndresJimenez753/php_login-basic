<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "db_php_login";

$conexion = mysqli_connect($host,$user,$pass,$bd);

/* Verificacion de la conexion a la base de datos */
/* if($conexion){
    echo "La conexion con la base de datos fue correcta";
}else{
    echo "Fallo en la sincornizacion con la base de datos";
}
 */

?>