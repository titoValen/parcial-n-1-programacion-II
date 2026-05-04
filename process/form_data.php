<?php
require_once '../components/head.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$estado = false;

if (empty($nombre) || empty($email) || empty($mensaje)) {
  echo "Por favor, completa todos los campos.";
} else {
  $estado = true;
}
?>

<main>
  <?php if (!$estado): ?>
    <figure><img src="../img/icon/check-error.webp" alt="Check Error"></figure>
    <p>Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo.</p>
    <a href="../index.php?vista=contacto">Volver al formulario</a>
  <?php else: ?>
    <figure><img src="../img/icon/check.webp" alt="Check"></figure>
    <p>Gracias por tu mensaje, <?= $nombre ?>. Nos pondremos en contacto contigo pronto.</p>
    <a href="../index.php?vista=home">Volver al inicio</a>
  <?php endif; ?>
</main>

<style>
main {
  display: grid;
  place-items: center;
  grid-template-rows: auto 1fr;
  margin: 2rem;
  background: var(--color-black);
}

main figure {
  margin: 0;
}

main p {
  font-family: var(--font-body);
  font-size: 1.25rem;
  margin: 1rem 0;
}

main a {
  font-family: var(--font-body);
  padding: 0.75rem 1.5rem;
  border: 2px solid var(--color-black);
  border-radius: 4px;
  background: var(--color-white);
  font-size: 1rem;
  text-decoration: none;
}
</style>