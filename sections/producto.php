<?php
require_once 'classes/Producto.php';
require_once 'config/endpoint.php';

$productos = Producto::obtenerProduct($url);

// Filtrado por categoría
$categorias = array_unique(array_map(fn($p) => $p->getCategory(), $productos));
sort($categorias);

$categoriaActiva = isset($_GET['categoria']) ? $_GET['categoria'] : null;

if ($categoriaActiva) {
  $productos = array_filter($productos, fn($p) => $p->getCategory() === $categoriaActiva);
}
?>

<main class="products-section">
  <h1>Productos</h1>

  <nav class="filter-nav">
    <span class="filter-text">Categoría:</span>
    <a class="filter-btn <?= !$categoriaActiva ? 'active' : '' ?>" href="?vista=producto">
      Todos
    </a>
    <?php foreach ($categorias as $cat): ?>
      <a class="filter-btn <?= $categoriaActiva === $cat ? 'active' : '' ?>"
        href="?vista=producto&categoria=<?= urlencode($cat) ?>">
        <?= $cat ?>
      </a>
    <?php endforeach; ?>
  </nav>

  <section class="products-grid">
    <?php foreach ($productos as $producto): ?>
      <?php require 'components/card.php'; ?>
    <?php endforeach; ?>
  </section>
</main>