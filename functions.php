<?php

function my_theme_enqueue_scripts() {
    // Enqueue Alpine.js
    wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.2/dist/cdn.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function enqueue_splide_assets() {
    // Enqueue Splide CSS
    wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), '1.0.0' );

    // Enqueue Splide JS
    wp_enqueue_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_splide_assets' );



// Enqueue CSS and Tailwind
function tailwind_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_script("tailwind", "https://cdn.tailwindcss.com");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css" );
}
add_action("wp_enqueue_scripts", "tailwind_styles");

function custom_enqueue_styles() {
    wp_enqueue_style('rowdies-font', 'https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');



// Enqueue JS
function custom_script() {
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/script.js"); 
}
add_action("wp_enqueue_scripts", "custom_script");


// Function to remove Gutenberg editor
function remove_gutenberg() {
    // remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "remove_gutenberg");



function enable_woocommerce() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'enable_woocommerce');


