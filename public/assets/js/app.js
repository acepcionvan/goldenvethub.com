window.addEventListener('DOMContentLoaded', () => {
  window.setTimeout(() => {
    document.querySelector('[data-animate-root]')?.classList.add('is-ready');
  }, 180);
});
