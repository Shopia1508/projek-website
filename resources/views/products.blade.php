@extends('layout')

@section('content')
<div class="products">
  <div class="products-text">
    <h2>Our Product</h2>
    <div class="btn-products">
        <button onclick="filterCategory('Coffe')" class="btn">Coffe</button>
        <button onclick="filterCategory('Food')" class="btn">Foods</button>
        <button onclick="filterCategory('NonCoffe')" class="btn">Non Coffe</button>
        <button onclick="filterCategory('Dessert')" class="btn">Dessert</button>
    </div>
  </div>

  <!-- Tempat tampil produk -->
  <div id="product-list" class="product-list"></div>

</div>

<!-- Script ambil data dari API -->
<script>
document.addEventListener('DOMContentLoaded', loadAllProducts);

function loadAllProducts() {
  fetch('/api/products')
    .then(res => res.json())
    .then(showProducts)
    .catch(err => console.error('Error:', err));
}

function filterCategory(category) {
  fetch(`/api/products/category/${encodeURIComponent(category)}`)
    .then(res => res.json())
    .then(showProducts)
    .catch(err => console.error('Error:', err));
}

function showProducts(data) {
  const container = document.getElementById('product-list');
  container.innerHTML = '';

  if (!data || data.length === 0) {
    container.innerHTML = '<p class="text-align:center;">Tidak ada produk di kategori ini.</p>';
    return;
  }
  data.forEach(product => {
  container.innerHTML += `
    <div class="products-card fade-in">
      <img src="/images/${product.image}" alt="${product.name}">
      <h4>${product.name}</h4>
      <p>${product.description}</p>
      <div class="price-add">
        <span><strong>Rp ${product.price}</strong></span>
      </div>
    </div>
  `;
});

}
</script>
@endsection
