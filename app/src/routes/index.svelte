<script>
  import ResidentialWindow from '$lib/assets/images/residential-window.jpg';
  import { banner } from '$lib/store';

  $banner = {
    ...$banner,
    heading: 'Go With The Bros',
    subHeading: 'We Know Windows!'
  };
</script>

<h1>
  When you need the best windows, call <br class="hidden-small" /> the best bros!
  <span class="material-icons"> emoji_people </span>
</h1>
<section>
  <p>
    When you are looking for the best glass cleaning service look no further than the best bros! <strong
      >Squeegee Bros</strong
    > is the window cleaning service you need! With our friendly team of exports working to meet your
    needs we are sure you will be blown away by our results.
  </p>
  <div>
    <img
      src={ResidentialWindow}
      alt="A Squeegee Bro cleaning an arched residential window"
      height="325"
      width="690"
    />
  </div>
</section>

<style>
  h1,
  section,
  p {
    text-align: left;
  }

  p {
    font-size: 1.8rem;
  }

  div {
    display: flex;
  }

  img {
    margin: 1rem auto;
    border-radius: 0.5rem;
    border: 1px solid #a1a1a1;
    box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.2);
  }
  .hidden-small {
    display: none;
  }
  @media (min-width: 1035px) {
    div {
      justify-content: flex-start;
    }
    img {
      margin: 0;
    }

    h1 {
      font-size: 3.8rem;
    }

    p {
      font-size: 2.2rem;
    }

    .hidden-small {
      display: block;
    }
  }
</style>
