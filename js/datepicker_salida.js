<!-- Este Script sirve para hacer que la fecha elegida en la salida no pueda ser menor que la fecha actual -->

  var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("fechasalida")[0].setAttribute('min', today);