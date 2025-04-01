<?php get_header();?>
<section class="orange relative h-64 mb-44 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>


<?php echo do_shortcode('[contact-form-7 id="b55075a" title="Contact"]'); ?>





<?php get_footer(); ?>