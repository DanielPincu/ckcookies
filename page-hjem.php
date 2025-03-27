<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <!-- Hero Section -->
<section class="orange h-60 md:h-80 lg:h-[500px] relative lg:pt-32">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="flex flex-col mx-auto lg:items-start items-center h-full px-10 xl:px-0">
                
        <h1 class="z-10 pt-10 text-3xl md:text-4xl text-center lg:text-left text-slate-100">
            <?php echo get_field("intro") ?>
        </h1>

        <div class="z-10 w-[500px] hidden lg:block">
            <p class="z-10 text-slate-100"><?php echo get_field("core_narrative") ?></p>
        </div>
                
        <button class="z-20 h-10 mt-10 bg-[4CA397] rounded-full w-64 text-center text-slate-100">Shop Nu</button>

        </div>

        <div>
            <div class="lg:z-10 z-9 hidden lg:block absolute bottom-10">
                <img src="<?php echo get_field('hero_image')['sizes']['large']; ?>" alt="<?php echo get_field('hero_image')['alt'] ?>" class="w-[80%]">
            </div>
        </div>

        <div class="z-10">

            <div class="absolute bottom-32">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="hjerte" class="lg:w-[90%] w-10">
            </div>
            
            <div class="absolute rotate-180 top-32 right-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="hjerte" class="lg:w-[90%] w-10">
            </div>

        </div>
            
    </div>
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølger" class="absolute -bottom-5 lg:-bottom-14">
</section>
    <!-- Hero section ends -->


    <!-- About us section -->
<section class="container mx-auto pt-32 pb-20">
        <div class="container mx-auto">
            <h2 class="text-xl md:text-4xl text-red-950 text-center">Om Vores Cookiebutik</h2>
            <div class="w-3/4 mx-auto mt-10">
                <p class="text-red-950">
                    <?php echo get_field("about_us") ?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge">
    </div>

<div class="hidden lg:block relative z-10 container mx-auto pt-20 px-5">
    <div class="flex items-center justify-between"> <!-- Changed 'justify-stretch' to 'justify-between' -->
        <h3 class="lg:text-4xl text-2xl text-slate-100 md:px-10 lg:px-0">Vores lækre smagfulde varer</h3>
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
            <button class="bg-teal-400 px-5 py-2 rounded-full text-slate-100 ml-auto">Se alle vores produkter</button>
        </a>
    </div>
    
    <div class="col-span-2">
        <!-- Inject here the product loop template part -->
        <?php get_template_part('template-parts/product-loop'); ?>
    </div>
</div>

    <div class="block lg:hidden">
        <h3 class="lg:text-4xl text-xl text-center text-slate-100 md:px-10 lg:px-0 py-10">Vores lækre smagfulde varer</h3>
        <?php get_template_part('template-parts/delicious-loop'); ?>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge">
    </div>
</section>

    <!-- Delicious flavorous items ends  -->


    <!-- Trust indicator -->
     
     <section class="hidden container mx-auto lg:grid xl:grid-cols-3 pt-52 pb gap-10 px-10">
        
       <div class="col-span-2">
        <div class="">
            <h4 class="text-2xl">Hver Bid Fyldt med Sødme</h4>
            <p class="font-light">Hver cookie og kage er lavet med kærlighed og kreativitet, designet til at gøre dine særlige øjeblikke endnu sødere. Uanset om det er en fødselsdag, bryllup eller en anden fejring, laver vi skræddersyede lækkerier, der bringer glæde i hver bid.</p>
        </div> 

        <div class="flex flex-row gap-10">
            <div class="flex flex-row gap-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trustico1.png" alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Søde Kreationer til Alle Anledninger</span>
                    <span class="font-light">Fra fødselsdage til bryllupper, vores cookies og kager er skabt til at passe til enhver fejring.</span>
               </div>
            </div>
            <div class="flex flex-row gap-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trustico2.png" alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Lavet med Kærlighed og Friske Ingredienser</span>
                    <span class="font-light">Hver lækkerbit er håndlavet med omhu og kun de fineste ingredienser for en lækker oplevelse.</span>
               </div>
            </div>
        </div>

        <br>

        <div class="flex flex-row gap-10">
            <div class="flex flex-row gap-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trustico3.png" alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">Skræddersyede Designs, Bare for Dig</span>
                    <span class="font-light">Vi bringer dine idéer til live med personlige cookies og kager, der matcher din unikke stil.</span>
               </div>
            </div>
            <div class="flex flex-row gap-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trustico4.png" alt="" class="w-20 h-20">
               <div>
                    <span class="block text-pink-500">En Bid af Lykke i Hvert Design</span>
                    <span class="font-light">Vores skræddersyede kreationer bringer glæde og en smule sødme til hvert særligt øjeblik.</span>
               </div>
            </div>
        </div>
      </div>
        
        <div class="hidden xl:flex justify-end ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trust.png" alt="" class="">
        </div>

     </section>

    <!-- Trust indicator ends  -->



    <!-- Featured Products -->

<section class="hidden lg:block orange relative mt-44">

    <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge">
    </div>

    <div class="relative z-10 container mx-auto py-20 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Udvalgte produkter</h3>
    </div>


        <!-- Inject carousel here -->
        <div class="pb-20">
            <?php get_template_part('template-parts/featured-loop'); ?>
        </div>




    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge">
    </div>

</section>

    <!-- Featured Products ends  -->


    <!-- Our shop gallery -->

<section class="hidden xl:block container mx-auto">
        <h3 class="hidden md:block text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Vores butiksgalleri</h3>

        <div class="hidden md:grid xl:grid-cols-11 h-[600px] gap-2 mt-10 px-10 xl:px-0">

            <div class="col-span-4">
                <div class="grid h-full gap-2">
                    <div class="bg-green-500 col-span-2"></div>
                    <div class="bg-yellow-500 col-span-1"></div>
                    <div class="bg-red-500 col-span-1"></div>
                </div>
            </div>
            <div class="hidden xl:block bg-blue-400 col-span-3"></div>
            <div class="col-span-4">
            <div class="grid h-full gap-2">
                    <div class="bg-yellow-500 col-span-1"></div>
                    <div class="bg-red-500 col-span-1"></div>
                    <div class="bg-green-500 col-span-2"></div>
                </div>
            </div>

        </div>

</section>

    <!-- Our shop gallery ends   -->


    <h3 class="text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Here goes testimonials</h3>

  

    <?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>


