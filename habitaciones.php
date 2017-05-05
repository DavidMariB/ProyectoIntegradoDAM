<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel DAM | Habitaciones</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="tour.php">Tour</a></li>
            <li class="active"><a href="habitaciones.php">Habitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
        <!-- Final Cabecera -->
        <!-- Pagina Principal -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <form action="scripts_bbdd/realizar_reserva.php" id="form1" method="post">
                <h2>Reservar Habitación</h2>
                <fieldset>
                  <div class="row">
                    Nombre: <input type="text" name="nombre" id="nombre" required></div>
                  <div class="row">
                    Mail:  <input type="email" name="mail" id="mail" required> </div>
                  <div class="row">
                    Teléfono: <input type="text" name="tlfn" id="tlfn" required></div>
                  <div class="row">
                    Fecha de Llegada: <input type="date" name="fechallegada" id="fecha_llegada" required> <br> </div>
                  <div class="row"> <br>
                    Fecha de Salida: <br> <input type="date" name="fechasalida" id="fecha_salida" required> </div>
                  <div class="row"> <br>
                    <br> Numero de Personas:
                      <select form="form1" name="num_personas">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div> <br>
                  <div class="row_textarea"> <br> Comentario Adicional:
                    <textarea cols="1" rows="1" form="form1" name="coment"></textarea>
                  </div>
                  <br> <div class="wrapper"> <input type="submit" class="button1"></a> <input type="reset" class="button1"></a> </div>
                </fieldset>
              </form>
              <div class="col2 pad">
                <h2><img src="images/title_marker1.jpg" alt="">Promociones del mes</h2>
                <div class="wrapper line1">
                  <div class="col3">
                    <figure class="pad_bot3"><img src="images/page3_img1.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color3">Suite Atico</strong></p>
                    <p>Reserva hoy esta habitación y obten un 40% de descuento adicional.</p>
                    <ul class="list2">
                      <li><span>3</span>Habitaciones</li>
                      <li><span>5</span>Camas</li>
                    </ul>
                    <a href="#" class="button2">Reservar Habitacion</a> </div>
                  <div class="col3 pad_left2">
                    <figure class="pad_bot3"><img src="images/page3_img4.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color3">Planta 23</strong></p>
                    <p>Reserva hoy una habitación situada en este piso y consigue un 70% de descuento.</p>
                    <ul class="list2">
                      <li><span>2</span>Habitaciones</li>
                      <li><span>4</span>Camas</li>
                    </ul>
                    <a href="#" class="button2">Reservar Habitacion</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Estandares de Calidad</h2>
                <p class="pad_bot1"><strong class="color2">Nuestras habitaciones cuentan con todo tipo de Servicios</strong> </p>
                <p class="pad_bot1"> Las habitaciones cuentan con algunas de las siguientes caracteristicas:.</p>
                <div class="wrapper pad_bot2">
                  <div class="col1">
                    <ul class="list1">
                      <li><a href="#"> Baño completamente equipado </a></li>
                      <li><a href="#"> Televisión por Satelite </a></li>
                      <li><a href="#"> Wi-fi </a></li>
                    </ul>
                  </div>
                  <div class="col1 pad_left1">
                    <ul class="list1">
                      <li><a href="#"> Aire Acondicionado </a></li>
                      <li><a href="#"> MiniBar </a></li>
                      <li><a href="#"> Detector de Humo </a></li>
                    </ul>
                  </div>
                </div>
                <p class="pad_bot1"><strong class="color2">Otro equipamiento:</strong></p>
                <p class="pad_bot1">Las habitaciones cuentan con mas equipamiento dependiendo de la habitación que se elija. </p></div>
              <div class="col1 pad_left1">
                <h2>Las Habitaciones</h2>
                <p class="pad_bot1"><strong class="color2">Equipamiento Basico</strong><br>
                  Baño, habitaciones, televisión por Satelite, Wi-Fi. </p>
                <figure class="pad_bot3"><img src="images/page4_img1.jpg" alt=""></figure>
                <ul class="list1 pad_bot3">
                  <li><a href="#">Click aquí para ver fotos de las habitaciones</a></li>
                </ul>
                <a href="#" class="button1">Leer Más</a> </div>
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
          <li><a href="services.php">Servicios</a></li>
          <li><a href="booking.php">Tour</a></li>
          <li class="active"><a href="rooms.php">Habitaciones</a></li>
          <li class="last"><a href="locations.php">Contacto</a></li>
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
<script src="js/slideshow.js"></script>
</body>
</html>