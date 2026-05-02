<main class="home-section">
  <h1>Bienvenidos a la tienda</h1>
  <p>Explora nuestro catalogo de zapatillas urbanas, running, skate y basquet.</p>
</main>

<style>
  .home-section {
    display: grid;
    place-content: center;
    gap: 0.75rem;
    padding: 1.5rem;
    text-align: center;
  }

  .home-section h1 {
    font-family: var(--font-title);
    font-size: clamp(36px, 6vw, 56px);
  }

  .home-section p {
    font-family: var(--font-body);
    max-width: 60ch;
  }
</style>