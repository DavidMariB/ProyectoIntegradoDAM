<?php

require("conectarBD.php");

$insertar = "INSERT INTO reservas (nombre, mail, tlfn, fecha_llegada, fecha_salida, num_personas, comentario) 
			VALUES ('$_POST[nombre]','$_POST[mail]','$_POST[tlfn]','$_POST[fechallegada]', 
					'$_POST[fechasalida]', '$_POST[num_personas]','$_POST[coment]')";

if (!mysqli_query($conectar, $insertar)){
	die ("NO PODÉS");
}

header("Location: ../index.php");
?>