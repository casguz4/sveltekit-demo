<script>
  import ImgCardWindow from '$lib/assets/images/window-cleaning--card.jpg';
  import ImgCardGutter from '$lib/assets/images/gutter-cleaning--card.jpg';
  import ImgCardPowerwashing from '$lib/assets/images/patio-powerwashing--card.jpeg';
  import ImgCardFriendlyStaff from '$lib/assets/images/friendly-staff--card.jpeg';

  import Card from './card.svelte';
</script>

<div class="service-grid container">
  <Card
    title="Window Cleaning"
    img={{
      imgSrc: ImgCardWindow,
      imgAlt: 'A Squeegee Bro cleaning on a ladder cleaning a tall window',
      width: '100px',
      height: '100px'
    }}
    description="Top window cleaning service provider in Oakland and Genesee counties!"
    target="/services/window-cleaning"
  />
  <Card
    title="Gutter Cleaning"
    img={{
      imgSrc: ImgCardGutter,
      imgAlt: 'gutters glogged with leaves',
      width: '100px',
      height: '100px'
    }}
    description="We offer additional services including gutter cleaning, power washing, & much more just ask us about them."
    target="/services/gutter-cleaning"
  />
  <Card
    title="Power Washing"
    img={{
      imgSrc: ImgCardPowerwashing,
      imgAlt: 'A Squeegee Bro power washing a cement patio',
      width: '100px',
      height: '100px'
    }}
    description="Decking, siding, and patios are no match for our experienced <strong>CLEAN TEAM</strong> restoring your home and landscape to their original beauty!"
    target="/services/power-washing"
  />
  <Card
    title="Friendly Staff"
    img={{
      imgSrc: ImgCardFriendlyStaff,
      imgAlt: 'Our staff at the capital cleaning the Armed Services Monument',
      width: '100px',
      height: '100px'
    }}
    description="Our staff is experienced and friendly; we're only satisfied if you are!"
    target="/about"
  />
</div>

<style>
  .service-grid {
    display: grid;
    grid-template-columns: 1fr;
    row-gap: 25px;
  }

  @media (min-width: 640px) {
    .service-grid {
      grid-template-columns: 1fr 1fr;
      column-gap: 15px;
    }
  }

  @media (min-width: 1035px) {
    .service-grid {
      grid-template-columns: 1fr 1fr 1fr 1fr;
      row-gap: 0;
    }
  }
</style>
