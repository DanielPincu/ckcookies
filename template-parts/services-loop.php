<?php
// Prevent direct access
defined('ABSPATH') || exit;

// Query for Custom Post Type: services
$args = array(
    'post_type'      => 'service', 
    'posts_per_page' => -1, // Fetch all services
    'order'          => 'ASC'
);

$query = new WP_Query($args);

?>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 items-center justify-center container mx-auto md:px-10 pt-10 pb-32 gap-14">
    <?php 
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $service_description = get_field('service_description');
            $service_icon = get_field('service_icon'); // ACF Image Field
            $service_title = get_the_title();
            ?>
            
            <div class="relative light h-72 border-4 border-pink-600 rounded-3xl hover:text-[#FDF7EC] duration-300">
                <h3 class="relative text-center text-2xl pt-10 z-10"><?php echo esc_html($service_title); ?></h3>
                <p class="relative z-10 px-5 text-sm"><?php echo esc_html($service_description); ?></p>
                <div class="absolute z-40 -bottom-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500">
                    <?php if ($service_icon): ?>
                        <img src="<?php echo esc_url($service_icon['url']); ?>" alt="<?php echo esc_attr($service_title); ?>" class="w-full z-10">
                    <?php endif; ?>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset Post Data
    else :
        echo '<p class="text-center">Ingen services fundet.</p>';
    endif;
    ?>
</div>
