<?php get_header(); ?>

<section class="orange relative h-64 mb-20 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>

<div class='py-10 container mx-auto'>
    <?php echo do_shortcode('[woocommerce_my_account]'); ?>
</div>

<?php get_footer(); ?>
