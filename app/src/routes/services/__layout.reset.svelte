<script>
  import '$lib/../app.css';

  import Banner from '$lib/components/Banner/home.svelte';
  import CTA from '$lib/components/CTA/cta.svelte';
  import Footer from '$lib/components/Footer/footer.svelte';
  import ContactForm from '$lib/components/ContactForm/form.svelte';
  import Header from '$lib/components/Header/header.svelte';
  import Nav from '$lib/components/Nav/navigation.svelte';
</script>

<div class="page-wrap">
  <Header class="page-header" />
  <Nav class="page-nav" />
  <Banner class="page-banner" />
  <section class="page-content--wrapper container">
    <div class="page-content ">
      <main class="page-main">
        <slot />
      </main>
      <aside class="page-sidebar">
        <ContactForm />
      </aside>
    </div>
  </section>
  <section>
    <CTA />
  </section>
  <Footer class="page-footer" />
</div>
