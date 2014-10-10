<html>
<head>
    <meta charset=utf-8>
    <title>Cristian Carmona</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet type="text/css" href="style.css" async>
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <link rel=apple-touch-icon href="logo.png">
</head>
<body>
        <div class="app own">
<span class="helper"></span>
                <a href="http://130.206.79.154/owncloud">
                        <img src="/owncloud/core/img/logo.svg" class="imag" alt="ownCloud">
                </a>
        </div>
        <div class="app trans">
<span class="helper"></span>
                <a href="http://130.206.79.154:9091">
                        <img src="transmision.png"  alt="transmission" class="imag">
                </a>
        </div>
        <div class="app plex">
<span class="helper"></span>

                <a href="http://130.206.79.154:32400/web">
                        <img src="plex.png"  alt="plex" class="imag">
                </a>
        </div>

                <?php
                $output = array(); 
                exec("sensors -A", $output); 
		exec("df -h", $output2);
		$patron = '(\d{2})';
		$patron2 = '(\d{2}%)';
		preg_match($patron,$output[1],$salida);
                preg_match($patron2,$output2[1],$salida2);
		preg_match($patron2,$output2[6],$salida3);
		?>

<div class='container'>
  <div class='card temp'>
    <div class='inner'>
      <div class='icon'></div>
      <div class='title'>
        <div class='text'>TEMPERATURA</div>
      </div>
      <div class='number'><?php echo $salida[0];?>°C</div>
    </div>
  </div>
  <div class='card energy'>
    <div class='inner'>
      <div class='icon'></div>
      <div class='title'>
        <div class='text'>DISCO 1</div>
      </div>
      <div class='number'><?php echo $salida2[0];?></div>
    </div>
  </div>
  <div class='card ocu'>
    <div class='inner'>
      <div class='icon'></div>
      <div class='title'>
        <div class='text'>DISCO 2</div>
      </div>
      <div class='number'><?php echo $salida3[0];?></div>
    </div>
  </div>
</div>

</body>
</html>


