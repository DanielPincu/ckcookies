<?php 

get_header(); ?>

<div class="container mx-auto p-4">
    
    <!-- Display category name or Shop -->
    <h3 class="text-3xl font-bold text-center my-8">
        <?php 
        if (is_product_category()) {
            single_cat_title(); // Display the category name if on a product category page
        } else {
            echo 'Welcome to our shop'; // Display 'Shop' if not on a category page
        }
        ?>
    </h3>

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
                        <span class="text-lg italic">by: <?php echo get_field('author'); ?></span><br>
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
