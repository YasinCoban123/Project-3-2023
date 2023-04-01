<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schoenen</title>
</head>
<body>
<?php include 'navbar.php'; ?>
  <section>
		<aside>
			<h2 id="h2">Filters</h2>
			<label for="brand">Brand</label>
			<select id="brand" name="brand">
				<option value="all">All</option>
				<option value="nike">Nike</option>
				<option value="adidas">Adidas</option>
				<option value="puma">Puma</option>
			</select>
			<label for="color">Color</label>
			<select id="color" name="color">
				<option value="all">All</option>
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="green">Green</option>
			</select>
			<label for="price">Price Range</label>
			<input type="range" id="price" name="price" min="40" max="150">
			<span id="price-value"></span>
			<button>Apply Filters</button>
		</aside>
		
		<main class="producten_main">
			<div class="products">
				<div class="section_shoes">
					<img src="img/nikesockdartprem.webp" class="producten">
					<h3 id="h3">Nike Sock Dart Premium</h3>
					<p>De bovenkant is volledig rood met een bijpassende transparante band.</p>
					<span>$99,99</span>
				</div>

				<div class="section_shoes">
					<img src="img/nikeairmaxalpha.webp" class="producten">
					<h3>Nike Air Max Alpha</h3>
					<p>De Nike Air Max Alpha demping biedt comfortabele stabiliteit voor het tillen, of het nu een lichte of zware dag is.</p>
					<span>$75.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/nikeairmaxsystm.webp" class="producten">
					<h3>Nike Air Max System</h3>
					<p>Je favoriete Max Air demping komt met serieuze jaren 80 flair in het Nike Air Max System.</p>
					<span>$100.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/reeboknfx.webp" class="producten">
					<h3>Reebok NFX</h3>
					<p>Reebok NFX-schoenen zijn ontworpen om je mee te nemen op een actieve dag.</p>
					<span>$50.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/nikeairmaxap.webp" class="producten">
					<h3>Nike Air Max Alpha Trainer 5</h3>
					<p>Beëindig je laatste rep met kracht en rek het uit met een brul die de vloer van de sportschool verbluft in de Nike Air Max Alpha Trainer 5.</p>
					<span>$50.00</span>
				</div>

					<div class="section_shoes">
					<img src="img/pumaxrayspeed.webp" class="producten">
					<h3>Puma X-ray Speed</h3>
					<p>De X-Ray Speed ​​is licht en wendbaar, waardoor je snel op de been blijft.</p>
					<span>$75.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/oneilaltahighboots.webp" class="producten">
					<h3>O'Neill Alta Men High Snowboots</h3>
					<p>Ga de deur uit voor een wandeling in de sneeuw met deze Alta Men High snowboots van O'Neill</p>
					<span>$100.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/adidaspureboost.webp" class="producten">
					<h3>Adidas Pure Boost</h3>
					<p>De Adidas Pure Boost is een voorbeeld voor hoe een energieteruggevende en comfortabele schoen moet zijn.</p>
					<span>$50.00</span>			
				</div>

				<div class="section_shoes">
					<img src="img/nikeairmaxltd.webp" class="producten">
					<h3>Nike Air Max LTD 3</h3>
					<p>De Nike Air LTD 3 voor heren heeft de Max Air-unit in de hak voor comfort en een leren bovenwerk voor duurzaamheid.</p>
					<span>$75.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/adidashoops.webp" class="producten">
					<h3>Adidas Hoops 3.0 </h3>
					<p>The iconic 3-Stripes on the synthetic leather upper, plus a rubber cupsole underneath, create a heritage vibe.</p>
					<span>$100.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/asicsgelcum.webp" class="producten">
					<h3>Asics Gel-Cumulus 24</h3>
					<p>Asics Gel-Cumulus 24 is een alledaagse schoen die is ontworpen om hardlopers een gedempte en comfortabele ervaring te bieden.</p>
					<span>$50.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/adidaseasttrail.webp" class="producten">
					<h3>Adidas East Trail 2.0 Rain.RDY</h3>
					<p>Deze hikingschoenen met adidas RAIN.RDY zijn ontwikkeld voor natte dagen in de natuur.</p>
					<span>$100.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/adidasultraboost23.webp" class="producten">
					<h3>Adidas Ultraboost</h3>
					<p>Ervaar epische energie met de nieuwe Ultraboost 23, onze lichtste Ultraboost ooit.</p>
					<span>$150.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/adidasadipower.webp" class="producten">
					<h3>Adidas Adipower</h3>
					<p>Deze adidas gewichthefschoenen houden je ook bij de hoogste belasting stabiel met een verhoogde hiel en compacte middenzool.</p>
					<span>$180.00</span>
				</div>
			</div>
		</main>
	</section>
<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>