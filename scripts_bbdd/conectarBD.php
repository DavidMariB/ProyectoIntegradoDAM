<?php

//Creamos la conexion con la base de datos
$conectar = mysqli_connect("localhost","usuario","Pintegrado2017","hotel_pi");
if (!$conectar){
	// En caso de que no se pueda conectar, se finaliza la conexión.
	echo ("Fallo al conectar a Mysql: ".mysqli_connect_errno($conectar)." ".mysqli_connect_error($conectar)."<br>");
	die("No ha sido posible realizar la conexión.<br><a href='index.php'>Volver</a>");
}
?>