<script>
  import Logo from '$lib/assets/images/logo-window-cleaning.jpg';
  import Button from '../Button/button.svelte';
  import { PHONE_NUMBER } from '$lib/constants/';

  // @ts-ignore
  const phoneNumber = PHONE_NUMBER.replaceAll('-', '');
</script>

<article class="container">
  <div class="grid">
    <section>
      <img src={Logo} height="225" width="225" alt="Squeegee Brows Window Cleaning Logo" />
    </section>
    <section class="flex">
      <h4>You need your windows cleaned <strong>THE RIGHT WAY!</strong></h4>

      <a href={`tel:${phoneNumber}`}
        ><Button label={PHONE_NUMBER}
          >{PHONE_NUMBER} <span class="material-icons">phone</span></Button
        ></a
      >

      <h5>Call Squeegee Bros and SEE the difference!</h5>
    </section>
  </div>
</article>

<style>
  h5 {
    color: var(--secondary);
    font-size: 2rem;
  }

  strong {
    color: var(--secondary);
    font-weight: 900;
    font-size: 2rem;
  }

  article {
    padding: 1.5rem;
    border: 5px solid var(--secondary);
    border-radius: 1rem;
  }

  img {
    margin: 1rem;
  }

  .grid {
    display: grid;
    grid-template-columns: 1fr;
  }

  .flex {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
  }

  @media (min-width: 1035px) {
    h4 {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
    }

    strong {
      font-size: 3rem;
    }

    .grid {
      grid-template-columns: min-content 1fr;
    }
  }
</style>
