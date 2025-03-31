<?php
// Get exactly 7 gallery posts (no more, no less)
$gallery_posts = get_posts(array(
    'post_type' => 'gallery',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'ASC'
));

// Only show the gallery if we have at least 7 images
if (count($gallery_posts) === 7) : 
?>
<section class="hidden xl:block container mx-auto">
    <h3 class="hidden md:block text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Vores butiksgalleri</h3>

    <div class="hidden md:grid xl:grid-cols-11 h-[600px] gap-2 mt-10 px-10 xl:px-0">
        <!-- Column 1 -->
        <div class="col-span-4">
            <div class="grid h-full gap-2">
                <div class="col-span-2 h-full w-full relative">
                    <?php
                    // Display the first gallery image
                    $image = get_field('gallery_image', $gallery_posts[0]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-span-1 h-full relative">
                    <?php
                    // Display the second gallery image
                    $image = get_field('gallery_image', $gallery_posts[1]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-span-1 h-full relative">
                    <?php
                    // Display the third gallery image
                    $image = get_field('gallery_image', $gallery_posts[2]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="hidden xl:block col-span-3 h-full relative">
            <?php
            // Display the fourth gallery image
            $image = get_field('gallery_image', $gallery_posts[3]->ID);
            if ($image) :
                $image_url = esc_url($image['sizes']['large']);
                $alt_text = esc_attr($image['alt']);
            ?>
                <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
            <?php endif; ?>
        </div>

        <!-- Column 3 -->
        <div class="col-span-4">
            <div class="grid h-full gap-2">
                <div class="col-span-1 h-full relative">
                    <?php
                    // Display the fifth gallery image
                    $image = get_field('gallery_image', $gallery_posts[4]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-span-1 h-full relative">
                    <?php
                    // Display the sixth gallery image
                    $image = get_field('gallery_image', $gallery_posts[5]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-span-2 h-full relative">
                    <?php
                    // Display the seventh gallery image
                    $image = get_field('gallery_image', $gallery_posts[6]->ID);
                    if ($image) :
                        $image_url = esc_url($image['sizes']['large']);
                        $alt_text = esc_attr($image['alt']);
                    ?>
                        <img class="gallery-image h-full w-full object-cover absolute inset-0" src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for enlarging images -->
<div id="imageModal" class="modal">
    <span id="closeModal" class="close">&times;</span>
    <img id="modalImage" class="modal-content" alt="">
</div>

<?php 
else : 
    // Optional: Show a message if you don't have exactly 7 images
    echo '<p class="text-center my-20">Galleri kræver mindst 7 billeder</p>';
endif; 
wp_reset_postdata();
?>

