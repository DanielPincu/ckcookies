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
                <button class="h-10 border-2 border-teal-500 duration-300 mt-10 bg-[4CA397] hover:bg-teal-700 rounded-full w-64 text-center text-slate-100">
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
                             class="w-[80%]">
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
                <button class="bg-teal-400 border-2 border-teal-500 px-5 py-2 hover:scale-[103%] duration-300 rounded-full text-slate-100 ml-auto">Se alle vores produkter</button>
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


    <!-- Trust indicator -->
    <section class="hidden container mx-auto lg:grid xl:grid-cols-3 pt-52 pb gap-10 px-10">
        
       <div class="col-span-2">
        <div class="">
            <h4 class="text-2xl">Hver Bid Fyldt med Sødme</h4>
            <p class="font-light">Hver cookie og kage er lavet med kærlighed og kreativitet, designet til at gøre dine særlige øjeblikke endnu sødere. Uanset om det er en fødselsdag, bryllup eller en anden fejring, laver vi skræddersyede lækkerier, der bringer glæde i hver bid.</p>
        </div> 

        <div class="flex flex-row gap-10">
            <div class="flex flex-row gap-5">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trustico1.png" 
                 alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Søde Kreationer til Alle Anledninger</span>
                    <span class="font-light">Fra fødselsdage til bryllupper, vores cookies og kager er skabt til at passe til enhver fejring.</span>
               </div>
            </div>
            <div class="flex flex-row gap-5">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trustico2.png" 
                 alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Lavet med Kærlighed og Friske Ingredienser</span>
                    <span class="font-light">Hver lækkerbit er håndlavet med omhu og kun de fineste ingredienser for en lækker oplevelse.</span>
               </div>
            </div>
        </div>

        <br>

        <div class="flex flex-row gap-10">
            <div class="flex flex-row gap-5">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trustico3.png" 
                 alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Skræddersyede Designs, Bare for Dig</span>
                    <span class="font-light">Vi bringer dine idéer til live med personlige cookies og kager, der matcher din unikke stil.</span>
               </div>
            </div>
            <div class="flex flex-row gap-5">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trustico4.png" 
                 alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">En Bid af Lykke i Hvert Design</span>
                    <span class="font-light">Vores skræddersyede kreationer bringer glæde og en smule sødme til hvert særligt øjeblik.</span>
               </div>
            </div>
        </div>
      </div>
        
        <div class="hidden xl:flex justify-end ">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust.png" alt="" class="">
        </div>

     </section>

    <!-- Trust indicator ends -->


    <!-- Featured Products -->
    <section class="hidden lg:block orange relative mt-44">

        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>

        <div class="relative z-10 container mx-auto py-20 px-10">
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




<!-- Our shop gallery -->

    <?php
    // Inject here the gallery template part
    get_template_part('template-parts/gallery-loop');
    ?>

<!-- Our shop gallery ends -->



<!-- Testimonial section -->

    <h3 class="text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Here goes testimonials</h3>

<!-- Testimonial section ends  -->

    <!-- Contact section -->
    <section class="orange h-3/4 relative mt-72 mb-20">
        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>
        <h3 class="text-center text-slate-100 pt-20 pb-10 lg:text-4xl text-2xl">Efterlad os en anmeldelse</h3>
        <div class="relative z-10 container mx-auto px-10 pb-10">
            <div class="flex flex-col gap-6 items-center">
                
            </div>
        </div>
        <div class="z-10 absolute -bottom-5 lg:-bottom-14">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>
    </section>
    <!-- Contact section ends -->
    
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
