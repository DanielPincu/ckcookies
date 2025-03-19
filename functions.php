<?php


// Enqueue CSS and Tailwind
function tailwind_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_script("tailwind", "https://cdn.tailwindcss.com");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css" );
}
add_action("wp_enqueue_scripts", "tailwind_styles");


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


