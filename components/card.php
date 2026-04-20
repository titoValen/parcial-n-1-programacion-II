<?php
foreach ($datos as $producto => $items) {
  foreach ($items as $item) {
    $price = number_format($item["price"], 0, ",", ".");

    echo "<div class='card' id='$item[id]'>";
    echo "<div class='card-header'>";
    echo "<span class='card-price'>$$price</span>";
    echo "</div>";
    echo "<div class='card-body'>";
    echo "<figure>";
    echo "<img src='$item[image]' alt='$item[alt]'>";
    echo "</figure>";
    echo "<h2 class='card-title'>$item[name]</h2>";
    echo "</div>";
    echo "</div>";
  }
}
