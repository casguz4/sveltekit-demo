<script>
  let classStyles;
  export { classStyles as class };

  import { banner } from '$lib/store';
  $: showSubHeading = !!$banner.subHeading;
</script>

<div class:subpage={!showSubHeading} class={`banner ${classStyles}`}>
  <section class="container">
    <h1 class="heading">{$banner.heading}</h1>
    {#if showSubHeading}
      <h2 class="subheading">{$banner.subHeading}</h2>
    {/if}
  </section>
</div>

<style>
  section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
  }

  .banner {
    background-image: url('/src/lib/assets/images/banner-home.jpg');
    background-size: cover;
    background-position: center;
    min-height: 20rem;
    box-shadow: inset 0 0 6px 3px rgba(0, 0, 0, 0.4);
    border-bottom: 5px solid var(--secondary);
  }

  .banner.subpage {
    min-height: 20rem;
    max-height: 30rem;
  }

  .heading,
  .subheading {
    -webkit-text-stroke: 1px var(--white);
    color: var(--secondary);
    font-weight: 900;
    margin: 1rem auto;
  }

  .heading {
    font-size: 3.6rem;
  }

  .subheading {
    font-size: 3rem;
  }

  @media (min-width: 1035px) {
    .banner {
      min-height: 40rem;
    }
    .heading {
      font-size: 6rem;
    }
    .subheading {
      font-size: 5rem;
    }
  }
</style>
