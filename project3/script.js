// Get references to the filter elements
const brandFilter = document.getElementById('brand');
const colorFilter = document.getElementById('color');
const priceFilter = document.getElementById('price');
const priceValue = document.getElementById('price-value');

// Get references to the product elements
const products = document.querySelectorAll('.products li');

// Add event listeners to the filters
brandFilter.addEventListener('change', filterProducts);
colorFilter.addEventListener('change', filterProducts);
priceFilter.addEventListener('input', updatePriceLabel);
priceFilter.addEventListener('change', filterProducts);

// Define a function to update the price label
function updatePriceLabel() {
  priceValue.textContent = `$${priceFilter.value}`;
}

// Define a function to filter the products
function filterProducts() {
  // Get the selected filter values
  const brandValue = brandFilter.value;
  const colorValue = colorFilter.value;
  const priceValue = priceFilter.value;

  // Loop through each product
  products.forEach((product) => {
    const brand = product.querySelector('h3').textContent.toLowerCase();
    const color = product.querySelector('img').getAttribute('src').split('/')[1].split('.')[0];
    const price = parseInt(product.querySelector('span').textContent.slice(1));

    // Check if the product matches the selected filters
    const brandMatch = (brandValue === 'all' || brand === brandValue.toLowerCase());
    const colorMatch = (colorValue === 'all' || color === colorValue.toLowerCase());
    const priceMatch = (price <= priceValue);

    // Show or hide the product based on the matches
    if (brandMatch && colorMatch && priceMatch) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
}

// Initialize the price label
updatePriceLabel();