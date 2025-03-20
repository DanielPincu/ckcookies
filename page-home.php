<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <!-- Hero Section -->
    <div class="orange h-60 md:h-80 lg:h-[500px] relative lg:pt-10">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col mx-auto lg:items-start items-center h-full">
                
                <h1 class="z-10 text-3xl md:text-5xl text-center lg:text-left text-white">Skabt Til At Forsøde Dine
                    <span class="z-10 block">Særlige øjeblikke</span>
                </h1>

                <div class="z-10 w-[500px] hidden lg:block">
                    <p class="z-10 text-white">Vi tror på, at det rette søde touch kan forvandle et almindeligt øjeblik til noget helt ekstraordinært. Lad os hjælpe dig med at skabe minder – én lækker bid ad gangen!</p>
                </div>
                
                <button class="z-10 h-10 mt-10 bg-[4CA397] rounded-full w-64 text-center text-white">Shop Nu</button>

            </div>

            <div>
                <div class="lg:z-10 z-9 hidden lg:block absolute bottom-20" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cookies1.png" alt="" class="w-[90%]">
                </div>
            </div>

            <div class="z-10">
                <div class="absolute bottom-32" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="" class="lg:w-[90%] w-10">
                </div>
                <div class="absolute rotate-180 top-32 right-0" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="" class="lg:w-[90%] w-10">
                </div>
            </div>
            
        </div>
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.png" alt="" class="absolute -bottom-12">
    </div>
    <!-- Hero section end -->














    <?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>