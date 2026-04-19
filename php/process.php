<?php
$archivo = "products.json";

if (file_exists($archivo)) {
  $json = file_get_contents($archivo);
  $datos = json_decode($json, true);
} else {
  $datos = "El archivo no existe";
}
