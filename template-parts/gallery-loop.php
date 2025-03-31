<?php
// Get exactly 7 gallery posts for frontpage display (no more, no less)
$gallery_posts = get_posts(array(
    'post_type' => 'gallery',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'ASC'
));

// Get ALL gallery posts (for modal)
$all_gallery_posts = get_posts(array(
    'post_type'      => 'gallery',
    'posts_per_page' => -1, // Get all images
    'orderby'        => 'date',
    'order'          => 'ASC'
));

// Only show the gallery if we have exactly 7 images
if (count($gallery_posts) === 7) : ?>
    <section class="container mx-auto">
        <h3 class="text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Vores butiksgalleri</h3>

        <div class="hidden md:grid xl:grid-cols-11 h-[600px] gap-2 mt-10 px-10 xl:px-0">
            <!-- Column 1 -->
            <div class="col-span-4">
                <div class="grid h-full gap-2">
                    <div class="col-span-2 h-full w-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer" data-modal="imageModal">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[0]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-span-1 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[1]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-span-1 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[2]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="hidden xl:block col-span-3 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                <?php
                $image = get_field('gallery_image', $gallery_posts[3]->ID);
                if ($image) :
                    $image_url = esc_url($image['sizes']['large']);
                    $alt_text = esc_attr($image['alt']);
                ?>
                    <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                <?php endif; ?>
            </div>

            <!-- Column 3 -->
            <div class="col-span-4">
                <div class="grid h-full gap-2">
                    <div class="col-span-1 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[4]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-span-1 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[5]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-span-2 h-full relative gallery-image hover:scale-[101%] duration-300 cursor-pointer">
                        <?php
                        $image = get_field('gallery_image', $gallery_posts[6]->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                        ?>
                            <img class="h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<!-- Modal for Carousel -->
<div class="modal splide__track" id="imageModal">
    <div class="modal-content">
        <!-- Splide Carousel -->
        <div class="splide modal-splide" id="modalCarousel">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    // Now using all gallery images, not just 7
                    foreach ($all_gallery_posts as $post) :
                        $image = get_field('gallery_image', $post->ID);
                        if ($image) :
                            $image_url = esc_url($image['sizes']['large']);
                            $alt_text = esc_attr($image['alt']);
                    ?>
                        <li class="splide__slide">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>" />
                        </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
        <!-- Close Button -->
        <span class="close">&times;</span>
    </div>
</div>



<?php else : ?>
    <p class="text-center my-20">Galleri kræver mindst 7 billeder</p>
<?php endif; ?>
