<?php 
require_once 'components/head.php'; 
require_once 'php/process.php';
?>

<body>
  <?php require_once 'components/header.php'; ?>
  <?php
  $vistas_creadas = ['home', 'producto', 'contacto', 'alumno'];
  if (
    isset($_GET['vista']) &&
    !empty($_GET['vista']) &&
    in_array($_GET['vista'], $vistas_creadas)
  ) {
    $vista = $_GET['vista'];
  } else {
    $vista = 'home';
  }

  require_once "sections/$vista.php";

  ?>
  <?php require_once 'components/footer.php'; ?>
</body>

</html>