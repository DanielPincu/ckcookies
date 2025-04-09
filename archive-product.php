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


<form method="get" id="category-filter-form">
    <div class="category-filter">
        <!-- Filter button for mobile -->
        <button type="button" id="filter-toggle" class="bg-teal-700 rounded-full text-white p-2 w-full lg:hidden">
        Filtrer efter kategori
        </button>

        <!-- Category buttons dropdown -->
        <div id="category-filter-options" class="flex flex-col gap-2 mt-2 hidden lg:flex lg:flex-row md:gap-4 justify-center">
            <!-- Button for showing all categories -->
            <button type="submit" name="product_cat" value="" class="w-48 text-white p-2 bg-[#4CA397] rounded-full hover:bg-gray-500 focus:outline-none <?php echo empty($_GET['product_cat']) ? 'bg-teal-700 text-white' : ''; ?>">Alle kategorier</button>

            <?php
            // Get the IDs of the categories to exclude
            $exclude_categories = array(
                get_term_by('slug', 'uncategorized', 'product_cat')->term_id, // "Uncategorized"
                get_term_by('slug', 'anbefalet', 'product_cat')->term_id,   // "Anbefalet"
                get_term_by('slug', 'udvalgt', 'product_cat')->term_id,     // "Udvalgt"
            );

            // Get all product categories excluding the specified ones
            $terms = get_terms(array(
                'taxonomy'   => 'product_cat',
                'orderby'    => 'name',
                'hide_empty' => false,
                'exclude'    => $exclude_categories, // Exclude these categories
            ));

            // Loop through categories and create a button for each
            foreach ($terms as $term) {
                // Check if category is selected
                $selected = (isset($_GET['product_cat']) && $_GET['product_cat'] == $term->slug) ? 'bg-teal-700' : 'bg-[#4CA397] hover:bg-teal-700';
                echo '<button type="submit" name="product_cat" value="' . esc_attr($term->slug) . '" class="w-48 text-white p-2 rounded-full ' . $selected . '">' . esc_html($term->name) . '</button>';
            }
            ?>
        </div>
    </div>
</form>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-20">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="border-b-2 border-slate-700 overflow-hidden flex flex-col items-center">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <div class="border-[8px] border-[#E84C77] rounded-3xl overflow-hidden">
                            <?php woocommerce_template_loop_product_thumbnail(); ?>
                        </div>
                    </a>
                    <div class="p-4">
                        <h2 class="text-lg font-bold h-10"><?php the_title(); ?></h2>
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
