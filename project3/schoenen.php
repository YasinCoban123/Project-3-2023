<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
	<link rel="icon" href="img/schoenreus logo.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schoenen</title>
</head>
<body>
<?php include 'navbar.php'; ?>
  <section>
		<aside>
			<h2 id="h2">Filters</h2>
			<label for="brand-filter">Schoenmerk:</label>
	<select id="brand-filter">
		<option value="">Alles</option>
		<option value="nike">Nike</option>
		<option value="adidas">Adidas</option>
		<option value="puma">Puma</option>
		<option value="oneill">O'Neill</option>
		<option value="reebok">Puma</option>
		<option value="asics">Asics</option>
		<option value="fila">Fila</option>
	</select>

	<label for="size-filter">Schoenmaat:</label>
	<select id="size-filter">
		<option value="">All</option>
		<option value="5">37</option>
		<option value="6">38</option>
		<option value="7">39</option>
		<option value="8">40</option>
		<option value="9">41</option>
		<option value="10">42</option>
		<option value="11">43</option>
		<option value="12">44</option>
</select>

	    <label for="price-filter">Price:</label>
			<input type="range" id="price" name="price" min="20" max="150">
			<span id="price-value"></span>
			<button id="filter-button">Filter</button>
		</aside>
		
		<main class="producten_main">
			<div id= "shoe-list">
			<div class="products" data-brand="nike" data-size="11" data-price="100">
				<div class="section_shoes">
				<a href="schoen1.php"><img src="img/nikesockdartprem.webp" class="producten"></a>
					<h3>Nike Sock Dart Premium</h3>
					<p>Deze sneakers van Nike trek je eenvoudig aan dankzij de elastische instap hebben ze een comfortabele pasvorm.</p>
					<span>€89,99</span>
				</div>
				<div class="section_shoes">
				<a href="schoen2.php"><img src="img/nikeairmaxalpha.webp" class="producten"></a>
					<h3>Nike Air Max Alpha</h3>
					<p>De Nike Air Max Alpha demping biedt comfortabele stabiliteit voor het tillen, of het nu een lichte of zware dag is.</p>
					<span>€69,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen3.php"><img src="img/nikeairmaxsystm.webp" class="producten"></a>
					<h3>Nike Air Max System</h3>
					<p>Je favoriete Max Air demping komt met serieuze jaren 80 flair in het Nike Air Max System.</p>
					<span>€79,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen4.php"><img src="img/reeboknfx.webp" class="producten"></a>
					<h3>Reebok NFX</h3>
					<p>Reebok NFX-schoenen zijn ontworpen om je mee te nemen op een actieve dag.</p>
					<span>€49,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen5.php"><img src="img/nikeairmaxalphatrainer.webp" class="producten"></a>
					<h3>Nike Air Max Alpha Trainer 5</h3>
					<p>Beëindig je laatste rep met kracht en rek het uit met een brul die de vloer van de sportschool verbluft in de Nike Air Max Alpha Trainer 5.</p>
					<span>€59,99</span>
				</div>

					<div class="section_shoes">
					<a href="schoen6.php"><img src="img/pumaxrayspeed.webp" class="producten"></a>
					<h3>Puma X-ray Speed</h3>
					<p>De X-Ray Speed ​​is licht en wendbaar, waardoor je snel op de been blijft.</p>
					<span>$74,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen7.php"><img src="img/oneilaltahighboots.webp" class="producten"></a>
					<h3>O'Neill Alta Men High Snowboots</h3>
					<p>Ga de deur uit voor een wandeling in de sneeuw met deze Alta Men High snowboots van O'Neill</p>
					<span>€49,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen8.php"><img src="img/adidaspureboost.webp" class="producten"></a>
					<h3>Adidas Pure Boost</h3>
					<p>De Adidas Pure Boost is een voorbeeld voor hoe een energieteruggevende en comfortabele schoen moet zijn.</p>
					<span>€99,99</span>			
				</div>

				<div class="section_shoes">
				<a href="schoen9.php"><img src="img/nikeairmaxltd.webp" class="producten"></a>
					<h3>Nike Air Max LTD 3</h3>
					<p>De Nike Air LTD 3 voor heren heeft de Max Air-unit in de hak voor comfort en een leren bovenwerk voor duurzaamheid.</p>
					<span>€109,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen10.php"><img src="img/adidashoops.webp" class="producten"></a>
					<h3>Adidas Hoops 3.0 </h3>
					<p>The iconic 3-Stripes on the synthetic leather upper, plus a rubber cupsole underneath, create a heritage vibe.</p>
					<span>$39,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen11.php"><img src="img/asicsgelcum.webp" class="producten"></a>
					<h3>Asics Gel-Cumulus 24</h3>
					<p>Asics Gel-Cumulus 24 is een alledaagse schoen die is ontworpen om hardlopers een gedempte en comfortabele ervaring te bieden.</p>
					<span>€119,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen12.php"><img src="img/adidaseasttrail.webp" class="producten"></a>
					<h3>Adidas East Trail 2.0 Rain.RDY</h3>
					<p>Deze hikingschoenen met adidas RAIN.RDY zijn ontwikkeld voor natte dagen in de natuur.</p>
					<span>€99,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen13.php"><img src="img/adidasultraboost23.webp" class="producten"></a>
					<h3>Adidas Ultraboost 23</h3>
					<p>Ervaar epische energie met de nieuwe Ultraboost 23, onze lichtste Ultraboost ooit.</p>
					<span>€149,99</span>
				</div>

				<div class="section_shoes">
				<a href="schoen14.php"><img src="img/adidasadipower.webp" class="producten"></a>
					<h3>Adidas Adipower</h3>
					<p>Deze adidas gewichthefschoenen houden je ook bij de hoogste belasting stabiel met een verhoogde hiel en compacte middenzool.</p>
					<span>€139,99</span>
				</div>
			</div>
			</div>
		</main>
	</section>
<?php include 'footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
<script src="script.js"></script>
</body>
</html>