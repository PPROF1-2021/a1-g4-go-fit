<?php
$host="localhost";
$usuario="id17588399_liza";
$clave="Osvaldo.1576";
$basededatos="id17588399_gofit";

$cann = new mysqli($host, $usuario, $clave, $basededatos);
mysqli_query($cann, "SET character_set_result=utf8");
if($cann->connect_error){
    die("database error: ". $cann->connect_error);
}
?>