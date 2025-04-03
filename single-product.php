<?php
/**
 * The template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 */

 // Prevents users from opening core PHP files directly in the browser.
defined( 'ABSPATH' ) || exit;

get_header();
?>


<section class="orange relative h-64 mb-20 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="" class="bølge">
    </div>
</section>

<div class="container mx-auto px-4 py-8">
    <?php
    // Display the single product using the WooCommerce shortcode
    echo do_shortcode('[product_page id="' . get_the_ID() . '"]');
    ?>
</div>



<?php
get_footer(); 
?>