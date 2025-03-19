add_action('wp_footer', 'add_accordion_script_and_styles');



function hide_registration_section_on_edit_address() {
    if (is_wc_endpoint_url('edit-address')) {
        echo '<style>.registration-section { display: none !important; }</style>';
    }
}
add_action('wp_head', 'hide_registration_section_on_edit_address');



function add_accordion_script_and_styles() {
    if (is_account_page()) {
        ?>
        <style>
            .register-accordion {
                cursor: pointer;  
                width: 100%;
                text-align: center;
                border: none;
                outline: none;
                transition: background-color 0.3s;
                background-color: #0073e6;
                color: white;
                font-weight: bold;
                border-radius: 5px;
                margin-bottom: 10px;
                font-size: 16px;
            }

            .register-accordion:hover {
                background-color: #2980b9;
            }

            .register-panel {
                display: none;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }

            .u-column2 {
                display: none;
            }

            /* New styles for login form */
            .login .password-input,
            .login .login-step-2 {
                display: none;
            }

            .error-message {
                color: red;
                margin-top: 5px;
                display: none;
            }

            /* Style for the new H1 tag */
            .register-heading {
                font-size: 28px;
                margin-bottom: 10px;
                color: #333;
                text-align: center;
            }

            /* Container for registration section */
            .registration-section {
                background-color: #fff;
                border-radius: 10px;
                padding: 30px;
                text-align: center;
                max-width: 600px;
                width: 100%;
                margin: 20px auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                font-family: 'Arial', sans-serif;
            }

            @media (max-width: 600px) {
                .registration-section {
                    max-width: 90%;
                    padding: 20px;
                }

                .register-heading {
                    font-size: 24px;
                }

                .register-accordion {
                    font-size: 14px;
                    padding: 10px 20px;
                }
            }
        </style>

        <script>
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

            // New login form functionality
            var loginForm = document.querySelector('.login');
            if (loginForm) {
                var usernameField = loginForm.querySelector('#username');
                var passwordField = loginForm.querySelector('#password');
                var loginButton = loginForm.querySelector('button[name="login"], input[name="login"]');
                
                if (usernameField && passwordField && loginButton) {
                    var usernameWrapper = usernameField.closest('.username-input') || usernameField.parentElement;
                    var passwordWrapper = passwordField.closest('.password-input') || passwordField.parentElement;
                    passwordWrapper.style.display = 'none';

                    var nextButton = loginButton.cloneNode(true);
                    nextButton.textContent = 'Næste';
                    loginButton.parentNode.insertBefore(nextButton, loginButton);
                    loginButton.style.display = 'none';

                    // Create error message elements
                    var usernameError = document.createElement('div');
                    usernameError.className = 'error-message';
                    usernameError.textContent = 'Brugernavnet må ikke være tomt.';
                    usernameField.parentNode.insertBefore(usernameError, usernameField.nextSibling);

                    var passwordError = document.createElement('div');
                    passwordError.className = 'error-message';
                    passwordError.textContent = 'Adgangskoden må ikke være tom';
                    passwordField.parentNode.insertBefore(passwordError, passwordField.nextSibling);

                    nextButton.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (usernameField.value.trim() === '') {
                            usernameError.style.display = 'block';
                        } else {
                            usernameError.style.display = 'none';
                            usernameWrapper.style.display = 'none';
                            passwordWrapper.style.display = 'block';
                            nextButton.style.display = 'none';
                            loginButton.style.display = 'block';
                        }
                    });

                    // Modify login button functionality
                    loginButton.addEventListener('click', function(e) {
                        if (passwordField.value.trim() === '') {
                            e.preventDefault();
                            passwordError.style.display = 'block';
                        } else {
                            passwordError.style.display = 'none';
                            // Allow normal form submission
                        }
                    });
                }
            }
        });
        </script>
        <?php
    }
}
