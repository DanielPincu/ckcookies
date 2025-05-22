<section class="testimonial container mx-auto splide splide-carousel-testimonial md:px-10">
    <div class="splide__track">
        <ul class="splide__list mx-auto ">
            <?php
            // Query for Custom Post Type: testimonial
            $args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => -1, // Fetch all testimonials
                'order'          => 'ASC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $testimonial_title = get_the_title();
                    $testimonial_content = get_the_content();
                    ?>
                    <li class="splide__slide flex flex-col items-center">
                        <article class="mt-10 relative flex flex-col items-center light2 h-96 border-4 border-pink-600 rounded-3xl text-[#FDF7EC] duration-300 p-8">
                            <!-- Quote Icon in Circle -->
                            <div class="absolute z-40 -top-10 left-1/2 transform -translate-x-1/2 border-4 border-slate-200 rounded-full w-20 h-20 bg-pink-500 flex items-center justify-center">
                                <span class="text-white text-6xl font-bold">“</span>
                            </div>

                            <!-- Testimonial Title -->
                            <h3 class="relative text-center text-2xl pt-10 z-10"><?php echo esc_html($testimonial_title); ?></h3>

                            <!-- Testimonial Content -->
                            <p class="relative z-10 px-2 text-sm mt-4 text-center"><?php echo esc_html($testimonial_content); ?></p>
                        </article>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">Ingen testimonials fundet.</p>';
            endif;
            ?>
        </ul>
    </div>
</section>
