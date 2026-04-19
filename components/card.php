<?php
foreach ($datos as $producto => $items) {
  foreach ($items as $item) {
    $price = number_format($item["price"], 0, ",", ".");

    echo "<div class='card' id='$item[id]'>";
    echo "<h2>$item[name]</h2>";
    echo "<p>Precio: $price</p>";
    echo "</div>";
  }
}
