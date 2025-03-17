<?php

get_header(); // Include the header
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Your Cart</h1>

    <?php echo do_shortcode('[woocommerce_cart]'); // WooCommerce cart shortcode ?>
</div>

<?php
get_footer(); // Include the footer
?>