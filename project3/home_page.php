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


  <!-- 
  <div class="schoen_preview">
    <div class="preview1">
      <img src="img/nikeairmaxalpha.png" class="nike_air_max_alpha">
        <p>Nike Air Max Alpha Smoke Grey</p>
      <a href="" class="koop_hier">Koop hier</a>
    </div>

    <div class="preview2">
      <img src="img/nikeairmaxalpha.png" class="nike_air_max_alpha">
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
-->

<!--
<div class="home_slideshow">
  <img src="img/nikeairmaxalpha.png" class="schoen_slides">
  <img src="img/nikeairmaxsystm.png" class="schoen_slides">
  <img src="img/nikesockdartprem.png" class="schoen_slides">
</div>
-->
  <div class="schoen_preview">
  <div class="slideshow-container">

<div class="my_slides fade">
  <img src="img/nikeairmaxalpha.png" class="schoen_slides">
  <div class="tekst">Nike Air Max Alpha Smoke Grey</div>
  <button><a href="schoen2.php" class="koop_hier">Koop hier</a></button>
</div>

<div class="my_slides fade">
  <img src="img/nikeairmaxsystm.png" class="schoen_slides">
  <div class="tekst">Nike Air Max Grey Blue</div>
  <button><a href="schoen3.php" class="koop_hier">Koop hier</a></button>
</div>

<div class="my_slides fade">
  <img src="img/nikesockdartprem.png" class="schoen_slides">
  <div class="tekst">Nike Sock Dart Premium Orange</div>
  <button><a href="schoen1.php" class="koop_hier">Koop hier</a></button>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>

<script>let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("my_slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}</script>
  
<?php include 'footer.php'; ?>
<audio id="backgroundtrack" src="mussic.mp3"></audio>
<script src="script.js"></script>
</body>
</html>