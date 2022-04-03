<script lang="ts">
  let classStyles;
  export { classStyles as class };

  let showMobileMenu = false;

  const navItems: NavItem[] = [
    { label: 'Home', target: '/' },
    { label: 'About', target: '/about' },
    { label: 'Services', target: '/services/window-cleaning' },
    { label: 'Contact Us', target: '/contact' }
  ];
</script>

<nav class={`${classStyles} navbar nav`}>
  <div class="container">
    {#if showMobileMenu}
      <!-- show mobile menu -->
      <div class="mobile-icon" class:active={showMobileMenu}>
        <div class="middle-line" />
      </div>
    {:else}
      <!-- show desktop -->
      <ul class="navbar-list" class:mobile={showMobileMenu}>
        {#each navItems as { label, target }}
          <li><a href={target}>{label}</a></li>
        {/each}
      </ul>
    {/if}
  </div>
</nav>

<style>
  nav {
    background: var(--secondary) !important;
    font-family: var(--font-family-header);
    font-size: 1.8rem;
    font-weight: 700;
    padding: 1rem;
    box-shadow: inset 0 0 5px 2px rgba(0, 0, 0, 0.4);
  }

  ul {
    list-style: none;
  }

  .navbar-list {
    display: flex;
    justify-content: space-around;
    padding: 0;
  }

  .navbar-list li a {
    color: var(--white);
    text-decoration: none;
  }

  .navbar-list li a:hover {
    text-decoration: underline;
  }

  .navbar-list li a:visited {
    color: var(--primary);
  }
</style>
