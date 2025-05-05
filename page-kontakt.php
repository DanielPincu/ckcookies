<?php get_header();?>
<section class="orange relative h-64 mb-44 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>

<div class="container mx-auto pb-5">
   
    <p>Før du sender din forespørgsel, opfordrer vi dig til at kigge i vores <a class="underline text-slate-500" href="<?php echo get_permalink( get_page_by_path( 'faq' ) ); ?>">Ofte Stillede Spørgsmål</a>
    sektion. Du kan muligvis finde svar på dit spørgsmål med det samme!</p>

    <p>Hvis du ikke finder det, du leder efter, er du altid velkommen til at udfylde formularen nedenfor, og vi vil med glæde hjælpe dig videre.</p>

</div>

<div class="container mx-auto">
    <?php echo do_shortcode('[contact-form-7 id="b55075a" title="Contact"]'); ?>
</div>





<?php get_footer(); ?>