<?php
require 'conectarBD.php';

$fllegada=$_GET['fechallegada'];
$fsalida=$_GET['fechasalida'];
$pension=$_GET['pension'];
$nom=$_POST['nombre'];
$ap=$_POST['apellidos'];
$id=$_POST['identificacion'];
$fnacimiento=$_POST['fechanacimiento'];
$tlf=$_POST['telf'];
$nac=$_POST['nacionalidad'];
$mail=$_POST['mail'];
$habSeleccionada=$_POST['habitaciones'];

//Realiza la insercion del nuevo cliente
mysqli_query($conectar,"INSERT INTO cliente (nombre, apellidos, identificacion, fecha_nacimiento, telefono, nacionalidad,email,fecha_alta) 
    VALUES ('$nom','$ap','$id','$fnacimiento','$tlf','$nac','$mail',NOW());")or die(mysqli_error($conectar)."  ".mysqli_errno($conectar));

//Obtiene el codigo de este nuevo cliente, necesario para la reserva
$consulta = mysqli_query($conectar,"SELECT codigo FROM cliente WHERE identificacion = '$id';");
$resultado=mysqli_fetch_array($consulta);
$id_nuevoCliente=$resultado['codigo'];

//Realiza la insercíon de la nueva reserva
mysqli_query($conectar,"INSERT INTO reserva (inicio, fin, regimen, cod_cliente, cod_habitacion) VALUES 
 ('$fllegada','$fsalida','$pension','$id_nuevoCliente','$habSeleccionada');")or die(mysqli_error($conectar)."  ".mysqli_errno($conectar));



header("Location: ../index.php");
?>