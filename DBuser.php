<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$saldo = $_POST["saldo"];


$sentenciaSQL_INSERT = "INSERT INTO usuarios (nombre,apellido,dni,saldo) VALUES ('$nombre','$apellido','$dni', $saldo)";


$c = mysqli_connect("localhost","root", "root", "pelisOnline");


if ($conjuntoDeFilas = mysqli_query($c, $sentenciaSQL_INSERT)){ 
	echo "La ejecución de la sentencia SQL ha ido bien <br>";

} else{
	echo "La ejecución de la sentencia SQL no ha ido bien <br>";
	echo "Error: " . mysqli_error();
}
mysqli_close($c);			

?>