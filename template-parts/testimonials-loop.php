<?php
// Prevent direct access
defined('ABSPATH') || exit;

// Query for Custom Post Type: testimonial
$args = array(
    'post_type'      => 'testimonial',
    'posts_per_page' => -1, // Fetch all testimonials
    'order'          => 'ASC'
);

$query = new WP_Query($args);
?>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 items-center justify-center container mx-auto md:px-10 pt-10 pb-32 gap-2">
    <?php 
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $testimonial_title = get_the_title();
            $testimonial_content = get_the_content();
            ?>
            
            <div class="relative flex flex-col items-baseline light2 h-96 border-4 border-pink-600 rounded-3xl text-[#FDF7EC] duration-300 p-5">

                <div class="absolute z-40 -top-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500 flex items-center justify-center">
                    <span class="text-white text-6xl font-bold">“</span>
                </div>

                <h3 class="relative px-2 text-center text-2xl pt-20 z-10"><?php echo esc_html($testimonial_title); ?></h3>

                <p class="relative z-10 px-2 text-sm"><?php echo esc_html($testimonial_content); ?></p>

            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p class="text-center">Ingen testimonials fundet.</p>';
    endif;
    ?>
</div>
