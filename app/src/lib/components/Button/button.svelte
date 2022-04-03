<script>
  export let label;
  export let alt = false;
  let classStyles = '';
  export { classStyles as class };
</script>

<button
  class={`${classStyles}`}
  on:click|stopPropagation|preventDefault
  name={label}
  id={`button-${label}`}
  class:alt
>
  <slot />
</button>

<style>
  button {
    background-color: var(--primary);
    padding: 0.5rem 1rem;
    color: var(--white);
    font-size: 2.6rem;
    border: 1px solid transparent;
    border-radius: 1rem;
    transition: all 0.2s ease;
  }
  button:hover {
    color: var(--primary);
    background-color: var(--white);
    border-color: var(--primary);
    cursor: inherit;
  }
  button:active {
    color: var(--white);
    background-color: var(--primary);
    border-color: var(--white);
  }

  .alt {
    background-color: var(--white);
    color: var(--primary);
    border-color: var(--white);
  }
  .alt:hover {
    color: var(--white);
    background-color: var(--primary);
    border-color: var(--white);
  }
  .alt:active {
    color: var(--primary);
    background-color: var(--white);
    border-color: var(--primary);
  }
</style>
