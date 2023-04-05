// Get filter elements
const brandFilter = document.getElementById('brand');
const colorFilter = document.getElementById('color');
const priceFilter = document.getElementById('price');
const priceValue = document.getElementById('price-value');

// Get product elements
const products = document.querySelectorAll('.section_shoes');

// Initialize filter values
let selectedBrand = brandFilter.value;
let selectedColor = colorFilter.value;
let selectedPrice = priceFilter.value;

// Listen for changes to the filter options
brandFilter.addEventListener('change', updateFilters);
colorFilter.addEventListener('change', updateFilters);
priceFilter.addEventListener('input', updateFilters);

function updateFilters() {
  // Get updated filter values
  selectedBrand = brandFilter.value;
  selectedColor = colorFilter.value;
  selectedPrice = priceFilter.value;

  // Filter the products based on the selected filters
  products.forEach(product => {
    const brand = product.querySelector('h3').textContent.toLowerCase();
    const color = product.querySelector('img').getAttribute('src').split('.')[0].split('/').pop().toLowerCase();
    const price = Number(product.querySelector('span').textContent.slice(1));

    if ((selectedBrand === 'alles' || brand === selectedBrand) &&
        (selectedColor === 'all' || color.includes(selectedColor)) &&
        (price <= selectedPrice)) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });

  // Display the selected filter options to the user
  priceValue.textContent = `€${selectedPrice}`;
}