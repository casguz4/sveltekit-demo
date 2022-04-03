<script context="module">
  export function load({ error: { message }, status }) {
    return {
      props: {
        status,
        message
      }
    };
  }
</script>

<script>
  export let status, message;
</script>

{#if status === 404}
  <h1>404: Sorry, we couldn't find that page. Did you mean <a href="/">Home?</a></h1>
  <p>
    {message.replace('Not found', 'Error')} could not be found. Please try a different location.
  </p>
{/if}

<style>
  * {
    text-align: center;
  }
</style>
