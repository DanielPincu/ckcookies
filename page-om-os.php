<?php get_header();?>
<section class="orange relative h-52 xl:h-64 mb-20 xl:mb-44">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Drys, Smil & En Hel Del Sukker!</h3>
    </div>
    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>

<article class="container m-auto px-2 xl:px-0 flex flex-col lg:grid lg:grid-cols-2">
    <div class="order-1 lg:order-2 flex justify-center items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/cklogo.webp" alt="hjemmesidens logo" class="">
    </div>
    <div class="order-2 lg:order-1">
        <h1 class="lg:text-3xl text-red-950 px-5 pb-5">Fra Hobby til Sød Eventyr</h1>
        <p class="lg:text-xl text-red-950 px-5">
            Hvad får du, når to kreative sjæle, en passion for bagning og et strejf af magi mødes? En bagerforretning, hvor hver cookie fortæller en historie! Kassia og Cassandra startede deres rejse som en simpel hobby—bare to veninder, der eksperimenterede med mel, glasur og uendelig fantasi. Men det, der begyndte som hyggelige bagedage, udviklede sig hurtigt til noget meget sødere. I dag lægger de deres hjerter (og en smule sukker) i at skabe smukke, speciallavede cookies og kager til fødselsdage, bryllupper og alle livets små og store fejringer. Hver eneste kreation er håndlavet med kærlighed, så ingen ordrer nogensinde er helt ens—præcis som de særlige øjeblikke, de er med til at gøre endnu sødere. Fra deres køkken til din fest, Kassia og Cassandra står klar til at gøre dine sødeste drømme til spiselige mesterværker.
        </p>
    </div>
</article>

<section class="orange h-[500px] relative lg:mt-32 mt-10">
    <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
             alt="bølge">
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2">
        <!-- IMAGE FIRST -->
        <div>
            <div class="lg:z-10 z-9 hidden lg:block absolute -bottom-10 xl:left-36">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/group.png" 
                     alt="hjerte" 
                     class="lg:w-[90%] w-10">
            </div>
        </div>

        <!-- TEXT CONTENT SECOND -->
        <div class="flex flex-col mx-auto items-center xl:items-start h-full px-10 xl:px-0">
            <h1 class="z-10 pt-10 text-3xl md:text-4xl text-center lg:text-left text-slate-100 pb-5">
            Løft din søde oplevelse
            </h1>

            <div class="z-10 ">
                <p class="z-10 text-slate-100 md:w-full xl:w-3/4">Hos os er en cookie ikke bare en cookie – det er en lille bid af glæde, skabt med kærlighed og kreativitet. Uanset om du fejrer en særlig begivenhed eller bare vil forkæle dig selv, sørger vi for, at hver eneste bid er en oplevelse i sig selv. Lad os gøre dine søde øjeblikke endnu mere magiske! <br> <span class="text-6xl">🍪✨✨✨</span></p>
            </div>
                
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="z-20">
                <button class="h-10 shadow-lg duration-300 mt-10 bg-[#4CA397] hover:bg-teal-700 rounded-full w-64 text-center text-slate-100">
                    Shop Nu
                </button>
            </a>
        </div>

        <!-- FLOATING HEARTS -->
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




<section class="h-[500px] container mx-auto relative lg:mt-32 mt-10">
   

    <div class="grid grid-cols-1 lg:grid-cols-2">
       
        <div class="flex flex-col mx-auto items-center xl:items-start h-full px-10">
            <h1 class="z-10 pt-10 text-3xl md:text-4xl text-center lg:text-left  pb-5">
            Skab Dine Drømmekager!
            </h1>

            <div class="z-10 ">
                <p class="z-10 md:w-full xl:w-3/4">Har du et særligt design i tankerne? Vi elsker at gøre dine søde idéer til virkelighed! Gå til vores kontakt-side, udfyld formularen, og upload et billede af dit ønskede design. Vi vender hurtigt tilbage for at fortælle dig, om vi kan lave det – og give dig et prisoverslag. Lad os sammen skabe magiske cookies! <br> <span class="text-6xl">✨✨✨🍪</span></p>
            </div>
                
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" class="z-20">
                <button class="h-10 shadow-lg duration-300 mt-10 bg-[#E84C77] hover:bg-[#D43F6A] rounded-full w-64 text-center text-slate-100">
                   Kom i kontakt
                </button>
            </a>
        </div>

        <div>
            <div class="z-10 hidden lg:block absolute pl-32">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/om-os.webp" alt="om os"> 
            </div>
        </div>

        </div>
    </div>

    
</section>


<section class="orange  relative mt-44 mb-20" id="anmeldelse">
        <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>
        
       <div class="py-10 container mx-auto px-2">

       <h3 class="hidden md:block text-center text-slate-100 pt-5 pb-5 lg:text-4xl text-2xl">Vores butiksgalleri</h3>
    <?php
    // Inject here the gallery template part
    get_template_part('template-parts/gallery-loop');
    ?>

       </div>



        <div class="z-10 absolute -bottom-5 lg:-bottom-14">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" 
                 alt="bølge">
        </div>

    </section>

    
   








<?php get_footer(); ?>