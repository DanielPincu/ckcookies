<?php 
get_header(); 
// Get the shop page ID
$shop = get_option('woocommerce_shop_page_id');
?>
<!-- <?php echo get_field('shop_intro', $shop) ?> -->

<section class="orange relative h-64 mb-20 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge">
    </div>
</section>


<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="border-b-2 border-slate-700 overflow-hidden flex flex-col items-center">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <div>
                            <?php woocommerce_template_loop_product_thumbnail(); ?>
                        </div>
                    </a>
                    <div class="p-4">
                        <h2 class="text-lg font-bold"><?php the_title(); ?></h2>
                        <span class="text-lg italic"><?php echo get_field('type'); ?></span>
                        <div class="mt-2 font-semibold text-center"><?php woocommerce_template_loop_price(); ?></div>
                        <div class="mt-4 text-center"><?php woocommerce_template_loop_add_to_cart(); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'No products found', 'woocommerce' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
