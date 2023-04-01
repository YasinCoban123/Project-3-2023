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
			<input type="range" id="price" name="price" min="0" max="1000">
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
					<span>$50.00</span>
				</div>

				<div class="section_shoes">
					<img src="img/nikesockdartprem.webp" class="producten">
					<h3>Product 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
					<span>$50.00</span>
					</div>

					<div class="section_shoes">
						<img src="img/nikesockdartprem.webp" class="producten">
						<h3>Product 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
						<span>$50.00</span>
						</div>

						<div class="section_shoes">
							<img src="img/nikesockdartprem.webp" class="producten">
							<h3>Product 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
							<span>$50.00</span>
							</div>

							<div class="section_shoes">
								<img src="img/nikesockdartprem.webp" class="producten"> 
								<h3>Product 1</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
								<span>$50.00</span>
								</div>
					
			</div>
		</main>
	</section>
<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>