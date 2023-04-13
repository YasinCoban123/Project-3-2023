const brandFilter = document.getElementById('brand-filter');
const sizeFilter = document.getElementById('size-filter');
const priceFilter = document.getElementById('price');
const priceValue = document.getElementById('price-value');
const filterButton = document.getElementById('filter-button');
const products = document.querySelectorAll('.products');

// Event listener for brand filter
brandFilter.addEventListener('change', () => {
  filterProducts();
});

// Event listener for size filter
sizeFilter.addEventListener('change', () => {
  filterProducts();
});

// Event listener for price filter
priceFilter.addEventListener('input', () => {
  priceValue.innerText = priceFilter.value;
});

// Function to filter products based on selected filters
function filterProducts() {
  for (let i = 0; i < products.length; i++) {
    const product = products[i];

    // Check if product matches selected brand filter
    if (brandFilter.value && product.dataset.brand !== brandFilter.value) {
      product.style.display = 'none';
      continue;
    }

    // Check if product matches selected size filter
    if (sizeFilter.value && product.dataset.size !== sizeFilter.value) {
      product.style.display = 'none';
      continue;
    }

    // Check if product matches selected price filter
    if (product.dataset.price > priceFilter.value) {
      product.style.display = 'none';
      continue;
    }

    // If product matches all filters, display it
    product.style.display = 'block';
  }
}

// Event listener for filter button
filterButton.addEventListener('click', () => {
  filterProducts();
});
