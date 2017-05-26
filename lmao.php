<!-- David Marí, Paco Monrabal, Adrian Poveda, Borja Royuela, Jose Vicente Marí, Victor Olivares -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel DAM | Registro</title>
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
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
        <!-- Final Cabecera -->
        <!-- Pagina Principal -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <div class="col2 pad">
               <?php
                  $con = mysqli_connect("52.90.200.239","usuario","Pintegrado2017","hotel_pi");
                  if(isset($_POST['enviar'])) { //
                  function valida_email($correo) {
                      if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
                      else return false;
                  }
                  // Comprobamos que los campos del formulario no estan vacíos
                  $sin_espacios = count_chars($_POST['usuario_nombre'], 1);
                  if(!empty($sin_espacios[32])) { // Comprobamos que el campo usuario_nombre no tenga espacios en blanco
                      echo "El campo <em>usuario_nombre</em> no puede espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_nombre'])) { // Comprobamos que el campo usuario_nombre no esté vacío
                      echo "No has ingresado tu nombre. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_apellidos'])) { // Comprobamos que el campo usuario_clave no esté vacío
                      echo "No has ingresado tus apellidos. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_clave'])) { // Comprobamos que el campo usuario_clave no esté vacío
                      echo "No has ingresado una contraseña. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) { // Comprobamos que las contraseñas ingresadas coincidan
                      echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(!valida_email($_POST['usuario_email'])) { // Validamos que el email ingresado sea correcto
                      echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_dni'])) { // Comprobamos que el campo usuario_dni no esté vacío
                      echo "No has ingresado un DNI. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_fecha'])) { // Comprobamos que el campo usuario_clave no esté vacío
                      echo "No has ingresado una Fecha de Nacimiento. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_tlfn'])) { // Comprobamos que el campo usuario_clave no esté vacío
                      echo "No has ingresado un telefono. <a href='javascript:history.back();'>Reintentar</a>";
                  }elseif(empty($_POST['usuario_pais'])) { // Comprobamos que el campo usuario_clave no esté vacío
                      echo "No has ingresado un pais. <a href='javascript:history.back();'>Reintentar</a>";
                  }else {
                      $usuario_nombre = mysqli_real_escape_string($con, $_POST['usuario_nombre']);
                      $usuario_apellidos = mysqli_real_escape_string($con, $_POST['usuario_apellidos']);
                      $usuario_clave = mysqli_real_escape_string($con, $_POST['usuario_clave']);
                      $usuario_email = mysqli_real_escape_string($con, $_POST['usuario_email']);
                      $usuario_dni = mysqli_real_escape_string($con, $_POST['usuario_dni']);
                      $usuario_tlfn = mysqli_real_escape_string($con, $_POST['usuario_tlfn']);
                      $usuario_fecha = mysqli_real_escape_string($con, $_POST['usuario_fecha']);
                      $usuario_pais = mysqli_real_escape_string($con, $_POST['usuario_pais']);
                      //Comprobamos que el usuario ingresado no haya sido registrado antes
                      $sql = mysqli_query($con, "SELECT identificacion FROM cliente WHERE identificacion='".$usuario_dni."'");
                      if(mysqli_num_rows($sql) > 0) {
                          echo "Esta identificacion ya ha sido utilizada en un registro anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
                      }else {
                          $usuario_clave = md5($usuario_clave); // Encriptamos la contraseña
                          
                          $reg = mysqli_query($con, "INSERT INTO cliente VALUES ('null".$usuario_nombre."', '".$usuario_apellidos."', '".$usuario_dni."', '".$usuario_fecha."', '".$usuario_tlfn."', '".$usuario_pais."' ,".$usuario_email."', NOW());");
                          if($reg) {
                              echo "Usuario Registrado con exito.";
                          }else {
                              echo "Ha ocurrido un error y no se ha podido registrar.";
                          }
                      }
                              }
                         }else{
                      ?>
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <label>Nombre:</label><br />
                            <input type="text" name="usuario_nombre" required /><br />
                            <label>Apellidos:</label><br />
                            <input type="text" name="usuario_apellidos" required /><br />
                            <label>Contraseña:</label><br />
                            <input type="password" name="usuario_clave" minlength="8" required /><br />
                            <label>Confirmar Contraseña:</label><br />
                            <input type="password" name="usuario_clave_conf" minlength="8" required /><br />
                            <label>Email:</label><br />
                            <input type="email" name="usuario_email" required= /><br />
                            <label>DNI:</label><br />
                            <input type="text" name="usuario_dni" maxlength="9" minlength="9" /><br />
                            <label>Fecha de Nacimiento:</label><br />
                            <input type="text" name="usuario_fecha" /><br />
                            <label>Telefono:</label><br />
                            <input type="number" name="usuario_tlfn" maxlength="9" minlength="9" /><br />
                            <label>Pais:</label><br />
                            <input type="text" name="usuario_pais" /><br />
                            <input type="submit" name="enviar" value="Registrar" />
                            <input type="reset" value="Borrar" />
                        </form>
                      <?php
                          }
                      ?> 
              </div>
            </div>
          </div>
          <div class="pad">
            <h2>Contacto</h2>
            <div class="line2">
              <div class="wrapper line3">
                <div class="col1">
                  <p class="pad_bot1"><strong class="color2">España</strong></p>
                  <p class="pad_bot1">Florida Universitaria Catarroja</p>
                  <p class="cols">
                    Telefono:<br> 96 122 03 80<br>
                  <a href="#" class="color1">info@florida.es</a> </div>
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
  <div class="col2">Copyright &copy;<a href="#" class="scrollup"> www.damhotel.com</a> Proyecto Integrado | DAM
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
</body>
</html>