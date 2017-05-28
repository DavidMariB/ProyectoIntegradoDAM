<!DOCTYPE html>
<html lang="es">
<head>
<title>Hotel DAM | Reservas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Aquí implementamos la función de traductor 
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
</head>
<body id="page4">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- Cabecera -->
      <header>
        <h1><a href="index.php" id="logo">DAMHotel</a></h1>
        <div class="department"> Florida Universitaria, Catarroja<br>
          <span>Teléfono: 96 122 03 80</span> <br>
          <span>Correo: info@florida.es </span> </div>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="tour.php">Tour</a></li>
            <li><a href="habitaciones.php">Habitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
        <!-- Final Cabecera -->
        <!-- Pagina Principal -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <form action="scripts_bbdd/realizar_reserva.php?fechallegada=<?php echo $_POST['fechallegada']; ?>&fechasalida=<?php echo $_POST['fechasalida']; ?>&pension=<?php echo $_POST['pension']; ?>" method="post">
                <h2 align="center">Reservar Habitación</h2>
                <fieldset>
                  <div class="row"><br>Fecha llegada: <input type="text" name="fechallegada" id="fechallegada" value="<?php echo $_POST['fechallegada']; ?>" disabled></div>
                  <div class="row"><br>Fecha salida: <input type="text" name="fechasalida" id="fechasalida" value="<?php echo $_POST['fechasalida']; ?>" disabled></div>
                  <div class="row"><br>Pension: <input type="text" name="pension" id="pension" value="<?php echo $_POST['pension']; ?>" disabled></div>
                  <br>Habitación:
                      <select name="habitaciones" id="habitaciones">
                      <!-- <?php

                        function devuelve_habitaciones_libres($inicio,$fin){
                        require '/scripts_bbdd/conectarBD.php';
                        $resultado = mysqli_query($conectar,"SELECT estancia.cod_hotel, estancia.tipo,estancia.id,estancia.nombre,habitacion.clasificacion,habitacion.plazas, 
                            habitacion.precio,habitacion.descripcion FROM estancia INNER JOIN hotel ON estancia.cod_hotel=hotel.codigo INNER JOIN habitacion ON 
                            estancia.id=habitacion.id_estancia WHERE estancia.id NOT IN (SELECT reserva.cod_habitacion FROM reserva WHERE reserva.inicio BETWEEN '$inicio' AND '$fin' OR reserva.fin 
                              BETWEEN '$inicio' AND '$fin') AND estancia.tipo='habitacion' AND hotel.codigo=1;");   
                        return $resultado;
                        }

                        $resultado = devuelve_habitaciones_libres($_POST['fechallegada'],$_POST['fechasalida']);
                        while($row=mysqli_fetch_array($resultado)){
                           echo ("<option value=\"".$row['id']."\">".$row['nombre']." - ".$row['clasificacion']." - ".$row['plazas']." plazas, ".$row['precio']."€/noche"."</option>");
                        }
                      ?> -->
                      </select>
                    </div>
                  <div class="row"><br>Nombre: <input type="text" name="nombre" id="nombre" required></div>
                  <div class="row"><br>Apellidos: <input type="text" name="apellidos" id="apellidos" required></div>
                  <div class="row"><br>Identificación: <input type="text" name="identificacion" id="identificacion" required></div><br>
                  <div class="row">Fecha de Nacimiento: <input type="date" name="fechanacimiento" id="fechanacimiento" required></div>
                  <div class="row"><br>Telefono: <input type="text" name="telf" id="telf" required></div>
                  <div class="row"><br>Email:<input type="email" name="mail" id="mail" required> </div>
                  <div class="row"><br>Nacionalidad: <input type="text" name="nacionalidad" id="nacionalidad" required></div>
                  <br> <div class="wrapper"></a><input type="reset" class="button1"></a><input type="submit" class="button1" value="Confirmar reserva"></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        </article>
        <!--Fin Pagina Principal-->
      </div>
    </div>
  </div>
</div>
<div class="main">
  <!-- Pie de Pagina -->
  <footer>
    <div class="col2">Copyright &copy;<a href="#"> www.damhotel.com</a> Proyecto Integrado | DAM
      <nav>
        <ul id="footer_menu">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li class="active"><a href="tour.php">Tour</a></li>
          <li><a href="habitaciones.php">Habitaciones</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
  </footer>
  <!-- Fin Pie de Pagina -->
</div>
<script src="js/datepicker_llegada.js"></script>
<script src="js/datepicker_salida.js"></script>
<script src="js/slideShow.js"></script>
</body>
</html>