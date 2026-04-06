<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Parcial Programación II nº1</title>

  <link rel="stylesheet" href="style/gobal.css">
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <header class="header">
    <picture>
      <source media="(min-width: 600px)" srcset="img/logo/250x150.png">
      <img src="img/logo/150x75.png" alt="Imagen del logo">
    </picture>
    <nav class="nav desktop">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Producto</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Alumno</a></li>
      </ul>
    </nav>
    <!-- Hamburger menu -->
    <input type="checkbox" id="checkbox">
    <label for="checkbox" class="toggle">
      <div class="bars" id="bar1"></div>
      <div class="bars" id="bar2"></div>
      <div class="bars" id="bar3"></div>
    </label>
    <nav class="nav responsive">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Producto</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Alumno</a></li>
      </ul>
    </nav>
  </header>
  <main></main>
  <footer></footer>
</body>

</html>