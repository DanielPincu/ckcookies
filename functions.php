<?php

function enqueue_splide_assets() {
    // Enqueue Splide CSS
    wp_enqueue_style( 'splide-css', get_template_directory_uri() . "/splide/splide.min.css" );

    // Enqueue Splide JS
    wp_enqueue_script( 'splide-js', get_template_directory_uri() . "/splide/splide.min.js" );
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


