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










        document.addEventListener('DOMContentLoaded', function() {
            // Signup accordion functionality
            var registerForm = document.querySelector('.u-column2');
            if (registerForm) {
                // Create a container for the registration section
                var container = document.createElement('div');
                container.className = 'registration-section';

                // Create H1 element
                var heading = document.createElement('h1');
                heading.textContent = 'Er du ikke medlem endnu?'; // Updated text
                heading.className = 'register-heading';

                // Create accordion button
                var accordion = document.createElement('button');
                accordion.className = 'register-accordion';
                accordion.innerHTML = 'Opret en kundekonto';

                // Add elements to the container
                container.appendChild(heading);
                container.appendChild(accordion);

                // Insert the container after the u-columns div
                var uColumns = document.querySelector('.u-columns');
                if (uColumns && uColumns.parentNode) {
                    uColumns.parentNode.insertBefore(container, uColumns.nextSibling);
                } else {
                    // Fallback: insert before the register form if u-columns not found
                    registerForm.parentNode.insertBefore(container, registerForm);
                }

                registerForm.classList.add('register-panel');

                accordion.addEventListener('click', function() {
                    // Hide the entire registration section
                    container.style.display = 'none';
                    
                    // Show the registration form
                    registerForm.style.display = 'block';
                    
                    // Optional: Remove the active class if needed
                    this.classList.remove('active');
                });
            }

            
        });
    