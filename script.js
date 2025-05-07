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

// Navigation bar color change on scroll
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const logo = document.getElementById('logo');
    let isThrottling = false;
    const thresholdPixels = 130; // Scroll threshold in pixels
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
    var registerForm = document.querySelector('.u-column2');
    if (registerForm) {
        var container = document.createElement('div');
        container.className = 'registration-section';

        var heading = document.createElement('h1');
        heading.textContent = 'Er du ikke medlem endnu?'; // Updated text
        heading.className = 'register-heading';

        var accordion = document.createElement('button');
        accordion.className = 'register-accordion';
        accordion.innerHTML = 'Opret ny konto';

        container.appendChild(heading);
        container.appendChild(accordion);

        var uColumns = document.querySelector('.u-columns');
        if (uColumns && uColumns.parentNode) {
            uColumns.parentNode.insertBefore(container, uColumns.nextSibling);
        } else {
            registerForm.parentNode.insertBefore(container, registerForm);
        }

        registerForm.classList.add('register-panel');

        accordion.addEventListener('click', function() {
            container.style.display = 'none';
            registerForm.style.display = 'block';
            this.classList.remove('active');
        });
    }
});

// Initialize Splide carousels (only if the elements exist)
document.addEventListener('DOMContentLoaded', function () {
    const splide1 = document.querySelector('.splide-carousel-1');
    if (splide1) {
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
    }

    const splide2 = document.querySelector('.splide-carousel-2');
    if (splide2) {
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
    }

    const modalCarousel = document.getElementById('modalCarousel');
    if (modalCarousel) {
        var splide = new Splide('#modalCarousel', {
            type: 'fade',        // 'fade' transition between images
            heightRatio: 1,      // Adjust the height ratio (optional)
            pagination: false,   // Disable pagination (optional)
            arrows: true,        // Enable navigation arrows
            autoplay: false,     // Disable autoplay (optional)
            speed: 1000,
            easing: 'ease',
        });
        splide.mount();

        var modal = document.getElementById('imageModal');
        var closeBtn = document.querySelector('.close');
        var images = document.querySelectorAll('.gallery-image');
        images.forEach(function(image, index) {
            image.addEventListener('click', function() {
                modal.style.display = 'block';
                splide.go(index);
            });
        });

        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }

    // Testimonial carousel
    const testimonialCarousel = document.querySelector('.splide-carousel-testimonial');
    if (testimonialCarousel) {
        new Splide('.splide-carousel-testimonial', {
            type: 'loop',
            perPage: 3,  // Default 
            gap: '1rem',  // Adjust space between slides
            autoplay: true,
            pagination: true,
            arrows: true,
            breakpoints: {
                1200: {
                    perPage: 1,
                },
            },
        }).mount();
    }
});

// Filter toggle functionality for category dropdown (only if elements exist)
document.addEventListener('DOMContentLoaded', function() {
    const filterToggle = document.getElementById('filter-toggle');
    const categoryFilterOptions = document.getElementById('category-filter-options');

    if (filterToggle && categoryFilterOptions) {
        filterToggle.addEventListener('click', function() {
            categoryFilterOptions.classList.toggle('hidden');
        });

        const categoryButtons = categoryFilterOptions.getElementsByClassName('category-button');
        for (let button of categoryButtons) {
            button.addEventListener('click', function() {
                categoryFilterOptions.classList.add('hidden');
            });
        }
    }
});




// FAQ Accordion


document.addEventListener('DOMContentLoaded', function () {
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(btn => {
      btn.addEventListener('click', () => {
        const currentlyOpen = document.querySelector('.faq-question.open');
        
        // Close other open items
        if (currentlyOpen && currentlyOpen !== btn) {
          currentlyOpen.classList.remove('open');
          currentlyOpen.nextElementSibling.classList.remove('open');
        }

        // Toggle this one
        btn.classList.toggle('open');
        btn.nextElementSibling.classList.toggle('open');
      });
    });
  });



// CF7 File upload button stubborn. Here I translated it to Danish
  document.addEventListener('DOMContentLoaded', function () {
    const fileInputs = document.querySelectorAll('.wpcf7 input[type="file"]');
  
    fileInputs.forEach(input => {
      const wrapper = document.createElement('div');
      wrapper.classList.add('file-upload-wrapper');
  
      const label = document.createElement('label');
      label.textContent = 'Vælg en fil';
      label.className = 'custom-upload-label';
      label.style.display = 'inline-block';
      label.style.padding = '8px 16px';
      label.style.border = '2px solid #ccc';
      label.style.cursor = 'pointer';
      label.style.marginBottom = '8px';
      label.style.backgroundColor = '#dd9933';
      label.style.borderRadius = '12px';
  
      input.parentNode.insertBefore(wrapper, input);
      wrapper.appendChild(label);
      wrapper.appendChild(input);
  
      input.style.display = 'none';
  
      label.addEventListener('click', () => input.click());
  
      input.addEventListener('change', () => {
        if (input.files.length > 0) {
          label.textContent = 'Valgt: ' + input.files[0].name;
        }
      });
    });
  });