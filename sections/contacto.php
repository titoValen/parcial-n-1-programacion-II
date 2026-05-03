<main>
  <h1>Contacto</h1>
  <form action="#" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

    <button type="submit">Enviar</button>
  </form>
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
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }

  main form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 500px;
    width: 100%;
    margin-top: 2rem;
  }

  main form label {
    font-family: var(--font-body);
    font-weight: 600;
  }

  main form input,
  main form textarea {
    font-family: var(--font-body);
    padding: 0.75rem;
    border: 2px solid var(--color-black);
    border-radius: 4px;
    background: var(--color-white);
    font-size: 1rem;
  }

  main form textarea {
    resize: vertical;
    min-height: 100px;
    max-height: 200px;
  }

  main form input:focus,
  main form textarea:focus {
    outline: none;
    border-color: var(--color-blue);
  }

  main form button {
    font-family: var(--font-title);
    font-size: 28px;
    padding: 0.75rem 2rem;
    background: var(--color-black);
    color: var(--color-white);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.2s ease;
  }

  main form button:hover {
    background: var(--color-green);
    color: var(--color-black);
  }
</style>