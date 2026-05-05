<?php
require_once 'classes/Producto.php';
require_once 'config/endpoint.php';

$productos = Producto::obtenerProduct($url);
?>

<main class="products-section">
  <h1>Productos</h1>

  <section class="products-grid">
    <?php foreach ($productos as $producto): ?>
      <?php require 'components/card.php'; ?>
    <?php endforeach; ?>
  </section>
</main>