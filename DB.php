<?php

$titulo = $_POST["titulo"];
$director = $_POST["director"];
$duracion = $_POST["duracion"];
$genero = $_POST["genero"];


$sentenciaSQL_INSERT = "INSERT INTO peliculas (titulo,director,duracion,genero) VALUES ('$titulo','$director','$duracion','$genero')";


$c = mysqli_connect("localhost","root", "root", "pelisOnline");


if ($conjuntoDeFilas = mysqli_query($c, $sentenciaSQL_INSERT)){ 
	echo "La ejecución de la sentencia SQL ha ido bien <br>";

} else{
	echo "La ejecución de la sentencia SQL no ha ido bien <br>";
	echo "Error: " . mysqli_error();
}
mysqli_close($c);			

?>