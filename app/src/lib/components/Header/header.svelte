<script lang="ts">
  let classStyles: string;
  export { classStyles as class };

  import Logo from '$lib/assets/images/logo.png';
  import Button from '$lib/components/Button/button.svelte';

  import { PHONE_NUMBER } from '$lib/constants/index';
  // @ts-ignore
  const STRIPPED_PHONE_NUMBER = PHONE_NUMBER.replaceAll('-', '');
</script>

<header class={`${classStyles}`}>
  <div class="container header-layout">
    <section class="logo">
      <a id="logo-anchor" href="/"><img id="logo" src={Logo} alt="Squeegee Bros Windows" /></a>
    </section>
    <section class="tagline"><em>The Best Bros <br /> In Town!</em></section>
    <section class="contact">
      <div class="phone-wrapper">
        <div class="phone-tag">Give us a call today!</div>
        <a class="phone-anchor" href={`tel:${STRIPPED_PHONE_NUMBER}`}>
          <Button class="phone-button" label="phone-number"
            >{PHONE_NUMBER} <span class="material-icons">call</span></Button
          ></a
        >
      </div>
    </section>
  </div>
</header>

<style>
  header {
    padding: 1rem;
  }
  .header-layout {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
  .logo {
    text-align: left;
  }
  .tagline {
    display: grid;
    align-items: center;
    text-align: center;
    color: var(--primary);
    font-weight: 400;
  }
  .contact {
    display: flex;
    justify-content: end;
    align-items: center;
    text-align: right;
    color: var(--primary);
  }
  .phone-tag {
    margin-bottom: 1.25rem;
    font-size: 2.5rem;
  }

  a.phone-anchor:hover {
    cursor: pointer;
  }

  @media (max-width: 700px) {
    .header-layout {
      grid-template-columns: 1fr;
      row-gap: 1.5rem;
    }
    .logo {
      text-align: center;
    }
    .contact {
      text-align: center;
      justify-content: center;
    }
  }
</style>
