<!-- Este Script sirve para hacer que la fecha elegida en la llegada no pueda ser menor que la fecha actual -->
  var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("fechallegada")[0].setAttribute('min', today);
