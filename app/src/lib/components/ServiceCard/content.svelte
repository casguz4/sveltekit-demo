<script>
  export let title, description;
  export let img = {
    imgSrc: null,
    imgAlt: null,
    height: null,
    width: null
  };
</script>

<article>
  <header>
    <h4>{title}</h4>
  </header>
  <div>
    <img src={img.imgSrc} alt={img.imgAlt} height={img.height} width={img.width} />
  </div>

  <p>{@html description}</p>
</article>

<style>
  article {
    height: 100%;
    max-width: 35rem;
    text-align: center;
    background-color: #e9e9e9;
    border: 1px solid #ccc;
    padding: 2rem 1.5rem;
    border-radius: 1rem;
    margin: 0 auto;
    width: 100%;
    transition: all 0.2s ease;
  }

  article:hover {
    border-color: #9a9a9a;
    box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.3);
  }

  header {
    margin-bottom: 1.3rem;
    color: var(--primary);
  }

  div {
    overflow: hidden;
    border-radius: 0.5rem;
    border: 1px solid #a1a1a1;
    max-height: 13.9rem;
  }

  img {
    max-height: 18.3rem;
    height: 100%;
    width: 100%;
    transition: all 0.2s ease-in-out;
  }
  article:hover img {
    transform: scale(1.1);
  }
  p :global(strong) {
    color: var(--primary);
    font-weight: 900;
  }
</style>
