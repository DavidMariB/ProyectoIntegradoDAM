<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel DAM | Tour</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Aquí implementamos la función de traductor -->
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
            <li class="active"><a href="tour.php">Tour</a></li>
            <li><a href="habitaciones.php">Habitaciones</a></li>
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
                <h2><img src="" alt=""></h2>
                <div class="wrapper line1">
                  <div class="col3">
                    <figure class="pad_bot3"><img src="" alt=""></figure>
                    <p class="pad_bot1"><strong class="color3"></strong></p>
                    <p></p>
                    <ul class="list2">
                      <li><span></span></li>
                      <li><span></span></li>
                    </ul>
                    <a href="#" class="button2"></a> </div>
                  <div class="col3 pad_left2">
                    <figure class="pad_bot3"><img src="" alt=""></figure>
                    <p class="pad_bot1"><strong class="color3"></strong></p>
                    <p></p>
                    <ul class="list2">
                      <li><span></span></li>
                      <li><span></span></li>
                    </ul>
                    <a href="#" class="button2"></a> </div>
                </div>
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
<script src="js/slideshow.js"></script>
</body>
</html>