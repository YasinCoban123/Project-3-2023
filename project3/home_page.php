<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/schoenreus logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Pagina</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<!--<video id="achtergrondvideo" autoplay muted loop>
		<source src="img/achetrgrondvifeo.mp4" type="video/mp4">
		<source src="img/achtergrondvideo.webm" type="video/webm">
    <source src="img/achtergrondvideo.ogv" type="video/ogg">
	</video>
  -->
  
  <div class="schoen_preview">
    <div class="preview1">
      <img src="img/nikeairmaxalpha.png" class="nike_air_max_alpha">
        <p>Nike Air Max Alpha Smoke Grey</p>
      <a href="" class="koop_hier">Koop hier</a>
    </div>

    <div class="preview2">
      <img src="img/nikeairmaxsystm.png" class="nike_air_max_system">
        <p>Nike Air Max Grey Blue</p>
        <button><a href="">Koop hier</a></button>
    </div>

    <div class="preview3">
      <img src="img/nikesockdartprem.png" class="nike_sock_dart">
        <p>Nike Sock Dart Premium Orange</p>
        <button><a href="">Koop hier</a></button>
    </div>

      <h1 id="recommendation_tekst">Producten die we aanraden.</h1>
  </div>    
    
<?php include 'footer.php'; ?>
<audio id="backgroundtrack" src="mussic.mp3"></audio>
<script src="script.js"></script>
</body>
</html>