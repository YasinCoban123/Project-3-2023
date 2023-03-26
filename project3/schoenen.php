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
<<<<<<< HEAD
  <section class="schoenen">
		<aside class="schoenfilter">
			<h2>Filters</h2>
=======
  <section>
		<aside>
			<h2 id="h2">Filters</h2>
>>>>>>> add3cb4fac2278b181c758e01e1b481b9db932f9
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
		
<<<<<<< HEAD

		<main class="schoenplek">
			<ul class="products">
				<li>
					<img src="img/nikesockdartprem.webp">
					<h3>Product 1</h3>
=======
		<main class="producten_main">
			<div class="products">
				<div class="section_shoes">
					<img src="img/nikesockdartprem.webp" class="producten">
					<h3 id="h3">Product 1</h3>
>>>>>>> add3cb4fac2278b181c758e01e1b481b9db932f9
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
					<span>$50.00</span>
				</div>
				<div class="section_shoes">
					<img src="img/nikeairmaxalpha.webp" class="producten">
					<h3>Product 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
					<span>$75.00</span>
				</div>
				<div class="section_shoes">
					<img src="img/nikeairmaxsystm.webp" class="producten">
					<h3>Product 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
					<span>$100.00</span>
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
					<div class="section_shoes">
						<img src="img/nikesockdartprem.webp" class="producten">
						<h3>Product 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
						<span>$50.00</span>
						<div class="section_shoes">
							<img src="img/nikesockdartprem.webp" class="producten">
							<h3>Product 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
							<span>$50.00</span>
							<div class="section_shoes">
								<img src="img/nikesockdartprem.webp" class="producten"> 
								<h3>Product 1</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna at tristique vehicula.</p>
								<span>$50.00</span>
					
			</div>
		</main>
	</section>
<script src="script.js"></script>
<?php include 'footer.php'; ?>

</body>
</html>