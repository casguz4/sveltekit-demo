<script>
  export let target = null;

  export let title, description;
  export let img = {
    imgSrc: null,
    imgAlt: null,
    height: null,
    width: null
  };

  import Card from './content.svelte';
</script>

{#if target}
  <a href={target}>
    <Card {title} {description} {img} />
  </a>
{:else}
  <Card {title} {description} {img} />
{/if}

<style>
  a {
    text-decoration: none;
    color: unset;
  }
  a:hover {
    cursor: pointer;
  }
</style>
