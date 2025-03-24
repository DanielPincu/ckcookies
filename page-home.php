<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <!-- Hero Section -->
    <section class="orange h-60 md:h-80 lg:h-[500px] relative lg:pt-10">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col mx-auto lg:items-start items-center h-full">
                
                <h1 class="z-10 text-3xl md:text-5xl text-center lg:text-left text-slate-100">Skabt Til At Forsøde Dine
                    <span class="z-10 block">Særlige øjeblikke</span>
                </h1>

                <div class="z-10 w-[500px] hidden lg:block">
                    <p class="z-10 text-slate-100">Vi tror på, at det rette søde touch kan forvandle et almindeligt øjeblik til noget helt ekstraordinært. Lad os hjælpe dig med at skabe minder – én lækker bid ad gangen!</p>
                </div>
                
                <button class="z-10 h-10 mt-10 bg-[4CA397] rounded-full w-64 text-center text-slate-100">Shop Nu</button>

            </div>

            <div>
                <div class="lg:z-10 z-9 hidden lg:block absolute bottom-20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cookies1.png" alt="" class="w-[90%]">
                </div>
            </div>

            <div class="z-10">
                <div class="absolute bottom-32">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="" class="lg:w-[90%] w-10">
                </div>
                <div class="absolute rotate-180 top-32 right-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="" class="lg:w-[90%] w-10">
                </div>
            </div>
            
        </div>
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.png" alt="" class="absolute -bottom-5 lg:-bottom-14">
    </section>
    <!-- Hero section ends -->


    <!-- About us section -->
    <section class="container mx-auto pt-32 pb-20">
        <div class="container mx-auto">
            <h2 class="text-xl md:text-4xl text-red-950 text-center">Om Vores Cookiebutik</h2>
            <div class="w-3/4 mx-auto mt-10">
                <p class="text-red-950">Ingen anledning er for lille eller for stor til at blive gjort sødere med en personlig cookie eller kage. Uanset om du fejrer en fødselsdag, et bryllup eller bare et hyggeligt øjeblik med dem, du holder af, vil vores speciallavede lækkerier bringe smil og glæde til enhver begivenhed.</p>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 items-center justify-center container mx-auto md:px-10 pt-10 pb-32 gap-14">

        <div class="relative light h-72 border-4 border-pink-600 rounded-3xl hover:text-[#FDF7EC] duration-300">
        <h3 class="relative text-center text-2xl pt-10 z-10">Fødselsdagscookies</h3>
        <p class="relative z-10 px-5 text-sm">Suspendisse consequat bibendum dui at finibus. Nullam turpis purus, interdum in odio eget.</p>
            <div class="absolute z-50 -bottom-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon1.png" alt="" class="w-full z-10">
            </div>
        </div>

        <div class="relative light h-72 border-4 border-pink-600 rounded-3xl hover:text-[#FDF7EC] duration-300">
        <h3 class="relative text-center text-2xl pt-10 z-10">Bryllupscookies</h3>
        <p class="relative z-10 px-5 text-sm">Suspendisse consequat bibendum dui at finibus. Nullam turpis purus, interdum in odio eget.</p>
            <div class="absolute z-50 -bottom-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon2.png" alt="" class="w-full z-10">
            </div>
        </div>

        <div class="relative light h-72 border-4 border-pink-600 rounded-3xl hover:text-[#FDF7EC] duration-300">
        <h3 class="relative text-center text-2xl pt-10 z-10">Kage</h3>
        <p class="relative z-10 px-5 text-sm">Suspendisse consequat bibendum dui at finibus. Nullam turpis purus, interdum in odio eget.</p>
            <div class="absolute z-50 -bottom-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon3.png" alt="" class="w-full z-10">
            </div>
        </div>

        <div class="relative light h-72 border-4 border-pink-600 rounded-3xl hover:text-[#FDF7EC] duration-300">
        <h3 class="relative text-center text-2xl pt-10 z-10">Fejring</h3>
        <p class="relative z-10 px-5 text-sm">Suspendisse consequat bibendum dui at finibus. Nullam turpis purus, interdum in odio eget.</p>
            <div class="absolute z-50 -bottom-10 left-1/2 transform -translate-x-1/2 border-2 border-slate-200 rounded-full w-32 h-32 bg-pink-500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon4.png" alt="" class="w-full z-10">
            </div>
        </div>
        </div>
    </section>

    <!-- About us section ends -->



    <!-- Delicious flavorous items -->

    <section class="orange relative">
        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.png" alt="" class="">
        </div>

        <div class="relative z-10 container mx-auto py-20">
            <h3 class="text-center lg:text-4xl text-2xl text-slate-100">Delicious Flavorous Items</h3>
            
            <div class="col-span-2">
                <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-5 py-10 px-0 md:px-10">

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se Produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se Produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se Produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se Produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-teal-400 border-[8px] bg-slate-100 h-96 rounded-3xl">
                            <button class="pink block mx-auto px-5 py-2 mt-72 rounded-full text-slate-100">Se produkt</button>
                        </div>
                        <span class="text-center text-slate-100 text-xl pt-8">Hobby & Interesser Kager</span>
                        <span class="text-center text-slate-100 pb-20">$65.00</span>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="z-10 absolute -bottom-5 lg:-bottom-14">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.png" alt="" class="">
        </div>
    </section>

    <!-- Delicious flavorous items ends  -->


    <!-- Trust indicator -->
     
     <section class="hidden container mx-auto lg:grid xl:grid-cols-3 py-52 gap-10 px-10">
        
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




    <?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>


