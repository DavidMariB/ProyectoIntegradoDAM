<!-- David Marí, Paco Monrabal, Adrian Poveda, Borja Royuela, Jose Vicente Marí, Victor Olivares -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel DAM | Contacto</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body id="page5">
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
            <li><a href="habitaciones.php">Habitaciones</a></li>
            <li class="active"><a href="contacto.php">Contacto</a></li>
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
                <h2><img src="images/title_marker1.jpg" alt="">Formulario de Contacto</h2>
                <form id="ContactForm" action="#">
                  <div>
                    <div  class="wrapper">
                      Nombre: <input type="text" class="input"> </div>
                    <div  class="wrapper"> 
                      Direccion: <input type="text" class="input"> </div>
                    <div  class="wrapper">
                      Email: <input type="text" class="input"> </div>
                    <div  class="textarea_box">
                      Comentario: <textarea name="textarea" cols="1" rows="1"></textarea> </div>
                    <input type="submit" class="button2"></a> <input type="reset" class="button2"></a> </div>
                </form>
              </div>
            </div>
          </div>
          <div class="pad">
            <h2>Nuestros Contactos</h2>
            <div class="line2">
              <div class="wrapper line3">
                <div class="col1">
                  <p class="pad_bot1"><strong class="color2">España</strong></p>
                  <p class="pad_bot1">Florida Universitaria Catarroja</p>
                  <p class="cols"> 
                    Telefono:<br> 96 122 03 80<br>
                  <a href="#" class="color1">info@florida.es</a> </div>
                <div class="col1 pad_left1">
                 <p class="pad_bot1"><strong class="color2">Localización</strong></p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3082.9996496844865!2d-0.4154526849889176!3d39.40151397949608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e82a8672a35%3A0xed578f5f80fed685!2sFlorida+Universitaria!5e0!3m2!1ses!2ses!4v1493822105295" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
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
  <div class="col2">Copyright &copy;<a href="#"> www.damhotel.com</a> Proyecto Integrado | DAM
      <nav>
        <ul id="footer_menu">
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="tour.php">Tour</a></li>
          <li><a href="habitaciones.php">Habitaciones</a></li>
          <li class="last"><a href="contacto.php">Contacto</a></li>
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