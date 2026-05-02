<main>
  <h1>Datos del Alumno</h1>

  <div class="contenido">
    <figure class="container-img">
      <img src="./img/photo/alumno.jpeg" alt="Foto del Alumno">
    </figure>
    <div class="info">
      <h2>Nombre: Tito Valentín</h2>
      <h2>Edad: 20 años</h2>
      <h2>Correo: valentin.tito@davinci.edu.ar</h2>
      <ul>
        <li>
          <a target="_blank" href="https://github.com/DonValen910">
            <figure><img src="./img/icon/GitHub_light.svg" alt="GitHub"></figure>
          </a>
        </li>
        <li>
          <a target="_blank" href="mailto:valentin.tito@davinci.edu.ar">
            <figure><img src="./img/icon/gmail.svg" alt="Email"></figure>
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.linkedin.com/in/valentin-tito">
            <figure><img src="./img/icon/linkedin.svg" alt="LinkedIn"></figure>
          </a>
        </li>
      </ul>
      <div class="container-descripcion">
        <p>Estudiante de Da Vinci en la carrera de Diseño y Desarrollo web, cursando el tercer cuatrimestre.</p>
      </div>
    </div>
  </div>
</main>

<style>
  main {
    display: grid;
    place-items: center;
    grid-template-rows: auto 1fr;
    margin: 2rem;
  }

  main h1 {
    font-family: var(--font-title);
    font-size: clamp(36px, 5vw, 48px);
    margin-bottom: 1rem;
  }

  main .contenido {
    width: fit-content;
    display: flex;
    font-family: var(--font-body);
  }

  main .container-img {
    width: 250px;
    border-radius: 1rem;
    overflow: hidden;
  }

  main .info {
    padding: 1rem;
  }

  main .info ul {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin: 1rem 0;
  }

  main .info ul li {
    width: 64px;
  }

  main .info .container-descripcion {
    max-width: 430px;
  }
</style>