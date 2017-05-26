<?php
    session_start();
    require('conectarBD.php');
    if(isset($_SESSION['usuario_nombre'])) {
        session_destroy();
        header("Location: index.php");
    }else {
        echo "Operación incorrecta.";
    }
?> 