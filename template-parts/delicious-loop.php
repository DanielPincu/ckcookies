<!-- Appears only on mobile -->
<section class="delicious splide splide-carousel-1 mx-auto w-[90vw] md:px-10 py-2">
    <div class="splide__track">
        <ul class="splide__list mx-auto max-w-[1200px]">
            <?php
            // Initialize the WooCommerce Product Query.
            $loop = new WP_Query(array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'popularity', // Optional: filter by popularity.
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat', // WooCommerce product category
                        'field'    => 'slug',         // Use the category slug
                        'terms'    => 'anbefalet',  // Slug of the "recommended" category
                        'operator' => 'IN',           // Include products from the "recommended" category
                    ),
                ),
            ));

            // Start the loop to display products.
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    $product = wc_get_product(get_the_ID()); // Get the WooCommerce product object.
                    ?>
                    <li class="splide__slide mx-2 flex flex-col h-full">
                        <div class="h-96 overflow-hidden flex justify-center items-center">
                            <img
                                class=""
                                src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>" 
                                alt="<?php echo esc_attr($product->get_name()); ?>"
                            />
                        </div>

                        <div class="flex-grow flex flex-col justify-between p-2">
                            <div>
                                <span class="mt-2 font-bold text-slate-100 text-lg line-clamp-2"><?php echo $product->get_name(); ?></span>
                                
                                <span class="font-semibold text-slate-100">
                                    <br>
                                    <?php echo wc_price($product->get_price()); ?>
                                </span>
                                <br>
                                <span><?php echo get_field('type') ?></span>
                            </div>
                            <div>
                                <a href="<?php echo esc_url(get_permalink($product->get_id())); ?>" 
                                   class="my-5 h-10 w-64 flex items-center rounded-3xl bg-teal-500 font-bold text-slate-50 hover:bg-teal-700 justify-center border-2 border-teal-600">
                                    Se produkt</span>
                                </a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>