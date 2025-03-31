<div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-5 py-10 md:px-10 lg:px-0">
    <?php 
    // Query for products in a specific "recommended" category
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 6, 
        'orderby'        => 'rand', // Random order, feels ok to me
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'recommended', // Category slug
            ),
        ),
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            global $product;
            ?>

            <div class="flex flex-col py-5">
                <div class="relative border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl hover:scale-[102%] duration-300">
                    <a href="<?php the_permalink(); ?>" class="block w-full h-full">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover rounded-2xl">
                    </a>
                    <a class="absolute bottom-5 left-1/2 transform -translate-x-1/2" href="<?php the_permalink(); ?>"><button class="pink hover:bg-pink-700 border-2 border-pink-500
                      duration-300 block mx-auto px-5 py-2 rounded-full text-slate-100">Se Produkt</button></a>
                </div>
                <span class="text-center text-slate-100 text-xl pt-8"><?php the_title(); ?></span>
                <span class="text-center text-slate-100 pb-2"><?php echo $product->get_price_html(); ?></span>
            </div>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
    else :
        echo '<p class="text-center text-slate-100">No products found in this category.</p>';
    endif;
    ?>
</div>
