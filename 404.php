<?php get_header(); ?>
<section class="orange relative h-32">

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>

<section class="text-center py-16">
    <div class="container mx-auto px-4 flex flex-col items-center">
        <!-- 404 Error Image -->
    <img class="w-1/2" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/404.webp" 
    alt="Error 404 - Page Not Found">
        <h1 class="md:text-5xl text-2xl font-bold text-red-600">Ups! Siden blev ikke fundet</h1>
        <p class="mt-4 text-xl text-gray-700">Beklager, men siden du leder efter eksisterer ikke. Den er måske blevet flyttet eller slettet.</p>

        <!-- Link tilbage til forsiden -->
        <div class="mt-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="px-8 py-3 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300">Gå tilbage til forsiden</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
