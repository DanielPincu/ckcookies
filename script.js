document.addEventListener('DOMContentLoaded', function() {
  const cookieMenu = document.getElementById('cookie-menu');
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('overlay');
  const closeMenu = document.getElementById('close-menu');
  
  // Check if the elements exist before adding event listeners
  if (cookieMenu && mobileMenu && overlay && closeMenu) {
      cookieMenu.addEventListener('click', toggleMenu);
      overlay.addEventListener('click', closeMenuFunction);
      closeMenu.addEventListener('click', closeMenuFunction);
  }

  function toggleMenu() {
      mobileMenu.classList.toggle('mobile-menu-open');
      overlay.classList.toggle('hidden');
  }

  function closeMenuFunction() {
      mobileMenu.classList.remove('mobile-menu-open');
      overlay.classList.add('hidden');
  }
});
