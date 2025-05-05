<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <!-- Hero Section -->
    <section class="orange h-60 md:h-80 lg:h-[500px] relative lg:pt-32">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col mx-auto lg:items-start items-center h-full px-10 xl:px-0">
                
            <h1 class="z-10 pt-10 text-3xl md:text-4xl text-center lg:text-left text-slate-100">
                <?php echo esc_html(get_field("intro")); ?>
            </h1>

            <div class="z-10 w-[500px] hidden lg:block">
                <p class="z-10 text-slate-100"><?php echo esc_html(get_field("core_narrative")); ?></p>
            </div>
                
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="z-20">
                <button class="h-10 shadow-lg duration-300 mt-10 bg-[#4CA397] hover:bg-teal-700 rounded-full w-64 text-center text-slate-100">
                    Shop Nu
                </button>
            </a>


            </div>

            <div>
                <div class="lg:z-10 z-9 hidden lg:block absolute bottom-10">
                    <?php 
                    $hero_image = get_field('hero_image');
                    if ($hero_image) : ?>
                        <img src="<?php echo esc_url($hero_image['sizes']['large']); ?>" 
                             alt="<?php echo esc_attr($hero_image['alt']); ?>" 
                             class="w-[80%] 2xl:w-[60%]">
                    <?php endif; ?>
                </div>
            </div>

            <div class="z-10">

                <div class="absolute bottom-32">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/heart.png" 
                         alt="hjerte" 
                         class="lg:w-[90%] w-10">
                </div>
                
                <div class="absolute rotate-180 top-32 right-0">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/heart.png" 
                         alt="hjerte" 
                         class="lg:w-[90%] w-10">
                </div>

            </div>
                
        </div>
        
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
             alt="bølger" 
             class="absolute -bottom-5 lg:-bottom-14">
    </section>
    <!-- Hero section ends -->


    <!-- About us section -->
    <section class="container mx-auto pt-32 pb-20">
        <div class="container mx-auto">
            <h2 class="text-xl md:text-4xl text-red-950 text-center">Om Vores Cookiebutik</h2>
            <div class="w-3/4 mx-auto mt-10">
                <p class="text-red-950">
                    <?php echo esc_html(get_field("about_us")); ?>
                </p>
            </div>
        </div>

                    <!-- Inject services here -->
    <?php get_template_part('template-parts/services-loop'); ?>
    </section>
    <!-- About us section ends -->


    <!-- Delicious flavorous items -->
    <section class="orange relative">
        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>

    <div class="hidden lg:block relative z-10 container mx-auto pt-20 px-5">
        <div class="flex items-center justify-between"> <!-- Changed 'justify-stretch' to 'justify-between' -->
            <h3 class="lg:text-4xl text-2xl text-slate-100 md:px-10 lg:px-0">Vores lækre smagfulde varer</h3>
            <a href="<?php echo esc_url(get_permalink( wc_get_page_id( 'shop' ) )); ?>">
                <button class="bg-[#4CA397] shadow-lg px-5 py-2 hover:scale-[103%] duration-300 rounded-full text-slate-100 ml-auto">Se alle vores produkter</button>
            </a>
        </div>
        
        <div class="col-span-2">
            <!-- Inject here the product loop template part -->
            <?php get_template_part('template-parts/product-loop'); ?>
        </div>
    </div>

    <!-- Appears only on mobile -->
    <div class="block lg:hidden">
        <h3 class="lg:text-4xl text-xl text-center text-slate-100 md:px-10 lg:px-0 py-10">Vores lækre smagfulde varer</h3>
        <?php get_template_part('template-parts/delicious-loop'); ?>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
             alt="bølge">
    </div>
    </section>

    <!-- Delicious flavorous items ends -->


    <!-- About products -->
<section class="hidden container mx-auto lg:grid xl:grid-cols-3 pt-52 pb-10 gap-10 px-10">
    <div class="col-span-2">
        <div>
            <h4 class="text-2xl">Hver Bid Fyldt med Sødme</h4>
            <p class="font-light"><?php echo get_field('heading') ?> </p>
        </div>

        <?php if( have_rows('about_product_repeater') ) : ?>
            <?php $count = 0; ?>
            <?php while( have_rows('about_product_repeater') ) : the_row(); ?>
                <?php
                    $icon_image = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                ?>
                <?php if($count % 2 == 0) echo '<div class="flex flex-row gap-10 mt-6">'; // new row every 2 items ?>
                    <div class="flex flex-row gap-5">
                        <img src="<?php echo esc_url($icon_image['url']); ?>" alt="<?php echo esc_attr($title); ?>" class="w-20 h-20">
                        <div>
                            <span class="block text-pink-500"><?php echo esc_html($title); ?></span>
                            <span class="font-light"><?php echo esc_html($description); ?></span>
                        </div>
                    </div>
                <?php if($count % 2 == 1) echo '</div>'; // close row every 2 items ?>
                <?php $count++; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <div class="hidden xl:flex justify-end">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust.webp" alt="om produkter">
    </div>
</section>

    <!-- About products ends -->


    <!-- Featured Products -->
    <section class="hidden lg:block orange relative mt-44">

        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>

        <div class="relative z-10 container mx-auto py-10 px-10">
            <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Udvalgte produkter</h3>
        </div>

        <!-- Inject carousel here -->
        <div class="pb-20">
            <?php get_template_part('template-parts/featured-loop'); ?>
        </div>

        <div class="z-10 absolute -bottom-5 lg:-bottom-14">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>

    </section>
    <!-- Featured Products ends -->








<!-- Testimonial section -->

<div class="pt-32">
<h3 class="text-center text-red-950 lg:text-4xl text-2xl">Hvad vores kunder synes om os</h3>
    <?php    // Inject here the testimonials template part
        get_template_part('template-parts/testimonials-loop');
    ?>
</div>

<!-- Testimonial section ends  -->


<!-- Testimonial form -->

    <section class="md:bg-[#F4A259] relative md:mt-44 md:mb-20" id="anmeldelse">
        <div class="hidden md:block z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>
        <h3 class="text-center md:text-slate-100 text-red-950 pt-20 lg:text-4xl text-2xl">Efterlad os en anmeldelse</h3>
        
       <div class="py-20 container mx-auto px-2">
           <p class="text-center md:text-slate-100 text-red-950">Vi elsker at høre fra vores kunder! Udfyld formularen nedenfor for at dele dine tanker og erfaringer med os. Din feedback betyder meget for os, og vi ser frem til at høre fra dig!</p>
        <?php echo do_shortcode('[contact-form-7 id="5d554b3" title="Testimonial"]') ?>
       </div>

        <div class="hidden md:block z-10 absolute -bottom-5 lg:-bottom-14">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>
    </section>
    
<!-- Testimonial form ends -->




<!-- Our shop gallery -->
 
    <h3 class="hidden md:block text-center text-red-950 lg:pt-44 pt-20 lg:text-4xl text-2xl">Vores butiksgalleri</h3>
    <?php
    // Inject here the gallery template part
    get_template_part('template-parts/gallery-loop');
    ?>

<!-- Our shop gallery ends -->
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
