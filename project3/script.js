var brandFilter = document.getElementById("brand-filter");
var sizeFilter = document.getElementById("size-filter");

// Get the shoe list element
var shoeList = document.getElementById("shoe-list");

// Initialize the price range slider
var slider = document.getElementById("price");
noUiSlider.create(slider, {
start: [20, 150],
step: 1,
connect: true,
format: wNumb({
decimals: 0,
prefix: '€'
}),
range: {
'min': 20,
'max': 150
},
handles: 2
});
var priceValue = document.getElementById("price-value");
slider.noUiSlider.on('update', function (values, handle) {
var value = values[handle];
priceValue.innerHTML = value;
});

// Get the filter button element
var filterButton = document.getElementById("filter-button");

// Add event listeners to the filter elements
brandFilter.addEventListener("change", filterShoes);
sizeFilter.addEventListener("change", filterShoes);
slider.noUiSlider.on('change', filterShoes);
filterButton.addEventListener("click", filterShoes);

// Define the filter function
function filterShoes() {
// Get the selected values from the filter elements
var selectedBrand = brandFilter.value;
var selectedSize = sizeFilter.value;
var selectedPrice = slider.noUiSlider.get();

// Loop through all shoes in the list
for (var i = 0; i < shoeList.children.length; i++) {
var shoe = shoeList.children[i];
// Check if the shoe matches the selected filter values
var brandMatch = selectedBrand === "" || shoe.dataset.brand === selectedBrand;
var sizeMatch = selectedSize === "" || shoe.dataset.size === selectedSize;
var priceMatch = parseInt(shoe.dataset.price) >= parseInt(selectedPrice[0]) && parseInt(shoe.dataset.price) <= parseInt(selectedPrice[1]);

// Show or hide the shoe based on the filter matches
if (brandMatch && sizeMatch && priceMatch) {
  shoe.style.display = "block";
} else {
  shoe.style.display = "none";
}
}
}