<?php
require_once 'classes/Producto.php';
require_once 'endpoint/config.php';

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

<style>
  .products-section {
    padding: 1.5rem;
  }

  .products-section h1 {
    margin-bottom: 1rem;
    font-family: var(--font-title);
    font-size: clamp(36px, 5vw, 48px);
    text-align: center;
  }

  .products-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
  }
</style>