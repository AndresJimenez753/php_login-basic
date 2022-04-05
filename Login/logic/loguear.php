<?php

require 'conexion.php';
session_start();

$user = $_POST['email'];
$pass = $_POST['pass'];

$q = "SELECT COUNT(*) AS contar FROM cliente WHERE usuario = '$user' and contraseña = '$pass'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']= $user;
    header("location: ../index.php");
}else{
    echo "Verifica tus credenciales";
}

?>

