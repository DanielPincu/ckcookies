// Hamburger menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const cookieMenu = document.getElementById('cookie-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const closeMenu = document.getElementById('close-menu');
    const menuLinks = document.querySelectorAll('#mobile-menu ul li a'); // Select all menu links
    
    // Check if the elements exist before adding event listeners
    if (cookieMenu && mobileMenu && overlay && closeMenu) {
        cookieMenu.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', closeMenuFunction);
        closeMenu.addEventListener('click', closeMenuFunction);
  
        // Add event listener to each menu link
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenuFunction);
        });
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
  

//Nagivation bar color change on scroll
  document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const logo = document.getElementById('logo');
    let isThrottling = false;
    const thresholdPixels = 100; // Scroll threshold in pixels
    const bufferPixels = 80; // Buffer zone in pixels (adjust as needed)

    window.addEventListener('scroll', function() {
        if (isThrottling) return;

        isThrottling = true;

        requestAnimationFrame(function() {
            const currentScroll = window.scrollY;

            if (currentScroll > thresholdPixels + bufferPixels) {
                header.classList.remove('orange');
                logo.classList.remove('md:w-24');
            } else if (currentScroll < thresholdPixels - bufferPixels) {
                header.classList.add('orange');
                logo.classList.add('md:w-24');
            }

            isThrottling = false;
        });
    });
});





// Login and Registration Accordion
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
    



        // Initialize Splide carousels
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide-carousel-1', {
                type: 'loop',
                perPage: 3,  // Default 
                breakpoints: {
                    600: {
                        perPage: 1,  // 1 items per page when the screen width is 600px or more
                    },
                    1024: {
                        perPage: 2,  // 2 items per page when the screen width is 1024px or more
                    },
                },
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide-carousel-2', {
                type: 'loop',
                perPage: 4,  // Default
                breakpoints: {
                    600: {
                        perPage: 1,  // 1 item per page when the screen width is 600px or less
                    },
                    768: {
                        perPage: 2,  // 2 items per page when the screen width is 768px or less
                    },
                    1400: {
                        perPage: 3,  // 3 items per page when the screen width is 1024px or less
                    },
                },
            }).mount();
        });
        


        


        
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the Splide carousel
            var splide = new Splide('#modalCarousel', {
                type       : 'fade',        // 'fade' transition between images
                heightRatio: 1,           // Adjust the height ratio (optional)
                pagination: false,          // Disable pagination (optional)
                arrows    : true,           // Enable navigation arrows
                autoplay  : false,          // Disable autoplay (optional)
                speed: 1000,
                easing     : 'ease',

            });
            splide.mount();
        
            // Get the modal and close button
            var modal = document.getElementById('imageModal');
            var closeBtn = document.querySelector('.close');
        
            // Open modal on image click
            var images = document.querySelectorAll('.gallery-image'); // Assume images have the class `gallery-image`
            images.forEach(function(image, index) {
                image.addEventListener('click', function() {
                    modal.style.display = 'block';
                    splide.go(index);  // Go to the clicked image in the carousel
                });
            });
        
            // Close modal when clicking the close button
            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        
            // Close modal when clicking outside the content
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
        


        // Testimonial carousel
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide-carousel-testimonial', {
              type       : 'loop',
              perPage: 3,  // Default 
              gap        : '1rem',  // Adjust space between slides
              autoplay   : true,
              pagination: true,
              arrows     : true,
              breakpoints: {
                1200: {
                  perPage: 1,
                },
                
              },
            }).mount();
          });
          

         


          



      
          document.addEventListener('DOMContentLoaded', function() {
            const filterToggle = document.getElementById('filter-toggle');
            const categoryFilterOptions = document.getElementById('category-filter-options');
        
            // Toggle the dropdown when the filter button is clicked (mobile only)
            filterToggle.addEventListener('click', function() {
                categoryFilterOptions.classList.toggle('hidden');
            });
        
            // Close the dropdown when a category is selected
            const categoryButtons = categoryFilterOptions.getElementsByClassName('category-button');
            for (let button of categoryButtons) {
                button.addEventListener('click', function() {
                    categoryFilterOptions.classList.add('hidden');
                });
            }
        });
        
        